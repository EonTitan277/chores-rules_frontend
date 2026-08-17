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
      <div class="def-emoji">🗣️</div>
      <h1 class="def-word">Back-talking</h1>
    </div>

    <!-- ONE-SENTENCE MEANING -->
    <p class="def-meaning">: Speaking to a parent, teacher, or other authority figure in a rude, disrespectful, or defiant way</p>

    <!-- WHAT IT LOOKS LIKE -->
    <div class="def-block def-example">
      <div class="def-block-label">Example</div>
      <p>Liam’s mother reminded him that asking respectful questions is okay, but <em>back-talk</em> is not.</p>
    </div>

    <!-- HELPFUL NOTE -->
    <div class="def-block def-note">
      <div class="def-block-label">Good to know</div>
      <p>
        <em>Back-talking</em> is not the same as respectfully disagreeing or asking questions.<br>
        You can explain your feelings, ask why a rule exists, or share a different opinion without <em>back-talking</em>. The difference is how you say it. If your words, tone, or attitude are meant to be disrespectful, argumentative, or defiant, it is usually considered <em>back-talk</em>.<br>
        For example, "Can you help me understand why?" is respectful, but "Whatever, I’m not doing it." is <em>back-talk</em>.
      </p>
    </div>

  </div>

  <?php require_once __DIR__ . '/../../includes/bottom-progress-menu.php'; ?>
</body>
</html>
