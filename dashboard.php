<?php
require_once __DIR__ . '/../includes/auth-check.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Dashboard</title>
  <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700;800;900&family=Fredoka+One&display=swap" rel="stylesheet" />
  <link rel="stylesheet" href="main.css">
  <link rel="stylesheet" href="login.css">
  <link rel="stylesheet" href="dashboard.css">
</head>
<body class="has-top-menu">
  <?php
  $menuShowDashboard = false;
  $menuShowLogout = false;
  require_once __DIR__ . '/includes/page-menu.php';
  ?>
  <div>
    <header>
      <div class="emoji-row">🎮 📋 ⭐</div>
      <h1>Dashboard</h1>
      <p class="subtitle">Welcome! Choose a page below.</p>
    </header>

    <div class="dash-grid">
      <a class="dash-card black" href="pages/main/introduction.php">
        <div class="dash-icon icon-bg">📖</div>
        <div>
          <div class="dash-label txt-color">Introduction</div>
          <div class="dash-desc">Why these rules exist and that they mean for you.</div>
        </div>
      </a>
      <a class="dash-card blue" href="pages/main/main-rules.php">
        <div class="dash-icon icon-bg">🧹</div>
        <div>
          <div class="dash-label txt-color">Chore &amp; Screen Time Rules</div>
          <div class="dash-desc">All the rules for chores, screen time, and rewards.</div>
        </div>
      </a>
      <a class="dash-card yellow" href="pages/main/school-break.php">
        <div class="dash-icon icon-bg">📺</div>
        <div>
          <div class="dash-label txt-color">School Break Screen Time Rules</div>
          <div class="dash-desc">Rules for your screen time bonus during school breaks.</div>
        </div>
      </a>
      <a class="dash-card green" href="pages/main/chores-table.php">
        <div class="dash-icon icon-bg">📋</div>
        <div>
          <div class="dash-label txt-color">Daily Chores List</div>
          <div class="dash-desc">Your full list of daily and evening chores.</div>
        </div>
      </a>
      <a class="dash-card red" href="pages/main/consequences.php">
        <div class="dash-icon icon-bg">⚠️</div>
        <div>
          <div class="dash-label txt-color">Consequences & Punishments</div>
          <div class="dash-desc">What happens if you don't follow the rules.</div>
        </div>
      </a>
    </div>
  </div>
  <?php require_once __DIR__ . '/includes/bottom-progress-menu.php'; ?>
  <button type="button" class="top-menu__button top-menu__button--logout" id="dash-logout" onclick="logout()">🚪 Log Out</button>
</body>
</html>