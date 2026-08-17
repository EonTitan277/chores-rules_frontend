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
      <div class="def-emoji">🐍</div>
      <h1 class="def-word">Manipulation</h1>
    </div>

    <!-- ONE-SENTENCE MEANING -->
    <p class="def-meaning">: When someone tries to control, trick, or influence another person in a dishonest or unfair way to get what they want</p>

    <!-- WHAT IT LOOKS LIKE -->
    <div class="def-block def-example">
      <div class="def-block-label">Example</div>
      <p>The teacher explained that <em>manipulation</em> is wrong because it uses tricks instead of honesty.</p>
    </div>

    <!-- HELPFUL NOTE -->
    <div class="def-block def-note">
      <div class="def-block-label">Good to know</div>
      <p>
        <em>Manipulation</em> also includes playing the victim, making excuses, exaggerating problems, or trying to make others feel bad so they will give in.<br>
        Most people can recognize these tactics when they happen. Being <strong>honest</strong> about what you want and accepting “no” for an answer is usually a much better way to treat others.
      </p>
    </div>

  </div>

  <?php require_once __DIR__ . '/../../includes/bottom-progress-menu.php'; ?>
</body>
</html>
