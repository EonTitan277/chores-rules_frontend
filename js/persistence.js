// Checkbox and contenteditable state persistence.

const CHECKBOX_STATES_URL = document.body.dataset.checkboxStateUrl || '/api/checkbox-states.php';
const TEXT_STATES_URL = '/api/text-states.php';
const CURRENT_ROLE_URL = '/api/current-user-role.php';

let currentUserRole = 'kid';
const pendingSaves = new Map();
window.checkboxState = {};
window.textState = {};

function showSaveStatus(success, message = success ? '✓ Saved' : '✗ Save failed') {
  const existingStatus = document.getElementById('save-status');
  if (existingStatus) {
    existingStatus.remove();
  }

  const status = document.createElement('div');
  status.id = 'save-status';
  status.textContent = message;
  status.style.cssText = `
    position: fixed;
    right: 20px;
    bottom: 100px;
    z-index: 1000;
    padding: 10px 20px;
    border-radius: 10px;
    color: #fff;
    font: 800 14px 'Nunito', sans-serif;
    background-color: ${success ? '#22c55e' : '#ef4444'};
    box-shadow: 0 2px 8px rgba(30, 41, 59, 0.2);
    animation: persistence-fade-in-out 2s ease-in-out;
  `;

  if (!document.getElementById('persistence-toast-styles')) {
    const style = document.createElement('style');
    style.id = 'persistence-toast-styles';
    style.textContent = `
      @keyframes persistence-fade-in-out {
        0% { opacity: 0; transform: translateY(20px); }
        10%, 80% { opacity: 1; transform: translateY(0); }
        100% { opacity: 0; transform: translateY(-20px); }
      }
    `;
    document.head.appendChild(style);
  }

  document.body.appendChild(status);
  setTimeout(() => status.remove(), 2000);
}

function wait(milliseconds) {
  return new Promise((resolve) => setTimeout(resolve, milliseconds));
}

async function fetchState(url, maxAttempts = 3) {
  let lastError;

  for (let attempt = 1; attempt <= maxAttempts; attempt += 1) {
    try {
      const response = await Promise.race([
        fetch(url, { cache: 'no-store' }),
        wait(5000).then(() => {
          throw new Error('State request timed out');
        }),
      ]);
      if (!response.ok) {
        const error = new Error(`State request failed: ${response.status}`);
        // Retry only failures that may be transient. Auth and other client
        // errors should be reported immediately.
        if (response.status < 500 && response.status !== 429) {
          throw error;
        }
        lastError = error;
      } else {
        const state = await response.json();
        if (!state || Array.isArray(state) || typeof state !== 'object') {
          throw new Error('State response was not a JSON object');
        }
        return state;
      }
    } catch (error) {
      lastError = error;
    }

    if (attempt < maxAttempts) {
      await wait(250 * (2 ** (attempt - 1)));
    }
  }

  throw lastError || new Error('State request failed');
}

async function fetchCurrentUserRole() {
  const response = await fetch(CURRENT_ROLE_URL, { cache: 'no-store' });
  if (!response.ok) {
    throw new Error(`Role request failed: ${response.status}`);
  }

  const result = await response.json();
  if (!result || !['kid', 'admin'].includes(result.role)) {
    throw new Error('Role response was invalid');
  }
  return result.role;
}

function applyRoleRestrictions(role) {
  const isKid = role === 'kid';

  document.querySelectorAll('td[data-key]').forEach((element) => {
    element.contentEditable = isKid ? 'false' : 'true';
  });

  document.querySelectorAll('input[type="checkbox"].restricted[data-key]').forEach((checkbox) => {
    if (isKid) {
      checkbox.style.pointerEvents = 'none';
      checkbox.setAttribute('aria-disabled', 'true');
    } else {
      checkbox.style.pointerEvents = '';
      checkbox.removeAttribute('aria-disabled');
    }
  });
}

async function loadCurrentUserRole() {
  try {
    currentUserRole = await fetchCurrentUserRole();
  } catch (error) {
    console.error('Unable to verify current user role:', error);
    currentUserRole = 'kid';
  }

  applyRoleRestrictions(currentUserRole);
}

async function loadStates() {
  const [checkboxResult, textResult] = await Promise.allSettled([
    fetchState(CHECKBOX_STATES_URL),
    fetchState(TEXT_STATES_URL),
  ]);

  if (checkboxResult.status === 'fulfilled') {
    window.checkboxState = checkboxResult.value;
    document.querySelectorAll('input[type="checkbox"][data-key]').forEach((checkbox) => {
      const key = checkbox.dataset.key;
      if (Object.prototype.hasOwnProperty.call(checkboxResult.value, key)
          && typeof checkboxResult.value[key] === 'boolean') {
        checkbox.checked = checkboxResult.value[key];
      }
    });
  } else {
    console.error('Unable to load checkbox states:', checkboxResult.reason);
  }

  if (textResult.status === 'fulfilled') {
    window.textState = textResult.value;
    document.querySelectorAll('[contenteditable][data-key]').forEach((element) => {
      const key = element.dataset.key;
      if (Object.prototype.hasOwnProperty.call(textResult.value, key)
          && typeof textResult.value[key] === 'string') {
        element.textContent = textResult.value[key];
      }
    });
  } else {
    console.error('Unable to load text states:', textResult.reason);
  }

  if (checkboxResult.status === 'rejected' || textResult.status === 'rejected') {
    showSaveStatus(false, '✗ Load failed');
  }

  document.dispatchEvent(new CustomEvent('persistence:states-loaded'));
}

async function saveState(url, key, value, options = {}) {
  try {
    const response = await fetch(url, {
      method: 'PUT',
      headers: { 'Content-Type': 'application/json' },
      body: JSON.stringify({ key, value }),
      keepalive: options.keepalive === true,
    });
    const result = await response.json();

    if (!response.ok || !result || result.ok !== true) {
      throw new Error('Save response was unsuccessful');
    }
    if (options.showStatus !== false) {
      showSaveStatus(true);
    }
  } catch (error) {
    console.error(`Unable to save state for ${key}:`, error);
    if (options.showStatus !== false) {
      showSaveStatus(false);
    }
  }
}

function createDebouncedSaver(url, wait) {
  const timers = new Map();

  return (key, value) => {
    clearTimeout(timers.get(key));
    const pendingKey = `${url}:${key}`;
    const timer = setTimeout(() => {
      timers.delete(key);
      pendingSaves.delete(pendingKey);
      saveState(url, key, value);
    }, wait);
    pendingSaves.set(pendingKey, { url, key, value, timer });
  };
}

// A reload can happen during the debounce window. Flush those edits while the
// browser is still leaving the page so the last interaction is not lost.
function flushPendingSaves() {
  pendingSaves.forEach(({ url, key, value, timer }, pendingKey) => {
    clearTimeout(timer);
    saveState(url, key, value, { keepalive: true, showStatus: false });
    pendingSaves.delete(pendingKey);
  });
}

const scheduleCheckboxSave = createDebouncedSaver(CHECKBOX_STATES_URL, 500);
const scheduleTextSave = createDebouncedSaver(TEXT_STATES_URL, 1000);

// Keep the existing reset button working with the Phase 7 single-key PUT API.
async function resetAllCheckboxes() {
  if (!confirm('Are you sure you want to reset all checkboxes? This action cannot be undone.')) {
    return;
  }

  const checkboxes = [...document.querySelectorAll('input[type="checkbox"][data-key]')]
    .filter((checkbox) => currentUserRole !== 'kid' || !checkbox.classList.contains('restricted'));
  checkboxes.forEach((checkbox) => { checkbox.checked = false; });
  window.checkboxState = { ...window.checkboxState };
  checkboxes.forEach((checkbox) => {
    window.checkboxState[checkbox.dataset.key] = false;
  });
  document.dispatchEvent(new CustomEvent('persistence:state-changed'));

  try {
    const responses = await Promise.all(checkboxes.map(async (checkbox) => {
      const response = await fetch(CHECKBOX_STATES_URL, {
        method: 'PUT',
        headers: { 'Content-Type': 'application/json' },
        body: JSON.stringify({ key: checkbox.dataset.key, value: false }),
      });
      const result = await response.json();
      return response.ok && result && result.ok === true;
    }));

    if (responses.some((successful) => !successful)) {
      throw new Error('One or more checkbox resets failed');
    }
    showSaveStatus(true);
  } catch (error) {
    console.error('Unable to reset checkboxes:', error);
    showSaveStatus(false);
  }
}

document.addEventListener('DOMContentLoaded', () => {
  applyRoleRestrictions(currentUserRole);
  Promise.all([loadCurrentUserRole(), loadStates()]).catch((error) => {
    console.error('State initialization failed:', error);
  });

  document.addEventListener('change', (event) => {
    const checkbox = event.target.closest('input[type="checkbox"][data-key]');
    if (checkbox && !(currentUserRole === 'kid' && checkbox.classList.contains('restricted'))) {
      window.checkboxState[checkbox.dataset.key] = checkbox.checked;
      document.dispatchEvent(new CustomEvent('persistence:state-changed'));
      scheduleCheckboxSave(checkbox.dataset.key, checkbox.checked);
    }
  });

  document.addEventListener('input', (event) => {
    const editable = event.target.closest('[contenteditable][data-key]');
    if (editable && currentUserRole !== 'kid') {
      window.textState[editable.dataset.key] = editable.textContent;
      document.dispatchEvent(new CustomEvent('persistence:state-changed'));
      scheduleTextSave(editable.dataset.key, editable.textContent);
    }
  });
});

window.addEventListener('pagehide', flushPendingSaves);