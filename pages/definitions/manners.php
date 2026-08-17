<?php
require_once __DIR__ . '/../../../includes/auth-check.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>WORD — Definition</title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Fredoka+One&family=Nunito:wght@400;700;800&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="../../main.css">
  <link rel="stylesheet" href="definitions.css">
</head>
<body class="has-top-menu">

  <?php
  require_once __DIR__ . '/../../includes/page-menu.php';
  ?>

  <div class="def-card blue">

    <div class="def-header">
      <div class="def-emoji">🫡</div>
      <h1 class="def-word">Manners</h1>
    </div>

    <p class="def-meaning">: Habits, behaviors, or ways of acting</p>

    <div class="def-block def-example">
      <div class="def-block-label">Example</div>
      <p>Paul’s polite <em>manners</em> made him well-liked by his friends.</p>
    </div>

    <div class="def-block def-note">
      <div class="def-block-label">Good to know</div>
      <p>
        Good <em>manners</em> are more than just saying “please” and “thank
        you.” They also include showing respect, being considerate of
        other people’s feelings, listening when others are speaking, and
        treating people kindly.
      </p>
    </div>

  </div>

  <?php require_once __DIR__ . '/../../includes/bottom-progress-menu.php'; ?>
</body>
</html>
