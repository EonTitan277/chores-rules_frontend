<?php
// Shared page navigation and account controls.
$menuShowDashboard = $menuShowDashboard ?? true;
$menuShowLogout = $menuShowLogout ?? true;
$menuUsername = htmlspecialchars((string) ($_SESSION['username'] ?? ''), ENT_QUOTES, 'UTF-8');
?>
<nav class="top-menu" aria-label="Page menu">
  <div class="top-menu__inner">
    <div class="top-menu__dashboard">
      <?php if ($menuShowDashboard): ?>
        <a href="/dashboard.php" class="top-menu__link top-menu__link--dashboard">🏠 Dashboard</a>
      <?php endif; ?>
    </div>
      <div class="top-menu__title">
        <p id="menu-title-regular">My Chores & Rules</p><p id="menu-title-small">C & R</p>
      </div>
    <?php if ($menuShowLogout): ?>
      <button type="button" class="top-menu__button top-menu__button--logout" onclick="logout()">
        🚪 Log Out
      </button>
    <?php endif; ?>
  </div>
  <div class="top-menu__username" aria-label="Currently logged in user">
    <svg class="top-menu__username-icon" width="22px" height="22px" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
      <path d="M8 7C9.65685 7 11 5.65685 11 4C11 2.34315 9.65685 1 8 1C6.34315 1 5 2.34315 5 4C5 5.65685 6.34315 7 8 7Z" fill="var(--blue)"/>
      <path d="M14 12C14 10.3431 12.6569 9 11 9H5C3.34315 9 2 10.3431 2 12V15H14V12Z" fill="var(--blue)"/>
    </svg> <span class="top-menu__username-text"><?php echo $menuUsername; ?></span>
  </div>
</nav>
<script src="/js/logout.js"></script>