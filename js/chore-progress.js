// Displays progress using the same state objects loaded by persistence.js.

(function initializeChoreProgress() {
  const progressBar = document.querySelector('.chore-progress');
  const progressFill = document.getElementById('chore-progress-fill');
  const progressText = document.getElementById('chore-progress-text');
  if (!progressBar || !progressFill || !progressText) return;

  let choreRows = [];

  function updateProgress() {
    const checkboxState = window.checkboxState || {};
    const textState = window.textState || {};
    const trackableRows = choreRows.filter((row) => {
      const editable = row.querySelector('[contenteditable="true"][data-key]');
      return !editable || (typeof textState[editable.dataset.key] === 'string'
        && textState[editable.dataset.key].trim() !== '');
    });
    const completed = trackableRows.filter((row) => {
      const checkbox = row.querySelector('input[type="checkbox"][data-key]');
      return checkbox && checkboxState[checkbox.dataset.key] === true;
    }).length;
    const total = trackableRows.length;
    const percentage = total ? (completed / total) * 100 : 0;

    progressBar.style.setProperty('--progress-percent', `${percentage}%`);
    progressBar.style.setProperty('--segment-count', String(total || 1));
    progressFill.style.width = `${percentage}%`;
    progressText.textContent = `${completed} / ${total} chores`;
    progressBar.setAttribute('aria-valuemax', String(total));
    progressBar.setAttribute('aria-valuenow', String(completed));
    progressBar.setAttribute('aria-label', `${completed} of ${total} chores completed`);
    document.dispatchEvent(new CustomEvent('chore-progress:updated', {
      detail: { completed, total, percentage },
    }));
  }

  async function loadChoreRows() {
    try {
      const response = await fetch('/pages/main/chores-table.php', { cache: 'no-store' });
      if (!response.ok) throw new Error(`Chore list request failed: ${response.status}`);
      const markup = await response.text();
      const documentFragment = new DOMParser().parseFromString(markup, 'text/html');
      choreRows = [...documentFragment.querySelectorAll('.chore-row')];
      updateProgress();
    } catch (error) {
      console.error('Unable to load chore progress:', error);
    }
  }

  document.addEventListener('persistence:states-loaded', updateProgress);
  document.addEventListener('persistence:state-changed', updateProgress);
  loadChoreRows();
})();