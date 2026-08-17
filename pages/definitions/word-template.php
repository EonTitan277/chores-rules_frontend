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

    <!-- EMOJI + WORD -->
    <div class="def-header">
      <div class="def-emoji">🌟</div>
      <h1 class="def-word">Word</h1>
    </div>

    <!-- ONE-SENTENCE MEANING -->
    <p class="def-meaning">: This is what it means in plain words — short and simple</p>

    <!-- WHAT IT LOOKS LIKE -->
    <div class="def-block def-example">
      <div class="def-block-label">Example</div>
      <p>A sentence showing how the word is used.</p>
    </div>

    <!-- HELPFUL NOTE -->
    <div class="def-block def-note">
      <div class="def-block-label">Good to know</div>
      <p>
        Any extra detail that helps it click — a comparison, a tip, or why it matters.
      </p>
    </div>

  </div>

  <?php require_once __DIR__ . '/../../includes/bottom-progress-menu.php'; ?>
</body>
</html>
