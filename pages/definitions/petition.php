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
      <div class="def-emoji">📋</div>
      <h1 class="def-word">Petition</h1>
    </div>

    <p class="def-meaning">: To formally ask a person or group in authority for something</p>

    <div class="def-block def-example">
      <div class="def-block-label">Example</div>
      <p>The citizens <em>petitioned</em> the town council to protect their right to privacy.</p>
    </div>

  </div>

  <?php require_once __DIR__ . '/../../includes/bottom-progress-menu.php'; ?>
</body>
</html>
