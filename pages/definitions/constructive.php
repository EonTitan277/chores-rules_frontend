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
      <div class="def-emoji">🏗️</div>
      <h1 class="def-word">Constructive</h1>
    </div>

    <p class="def-meaning">: Helping to develop or improve something</p>

    <div class="def-block def-example">
      <div class="def-block-label">Example</div>
      <p>Something that is <em>constructive</em> brings about improvement and growth.</p>
    </div>

    <div class="def-block def-note">
      <div class="def-block-label">Good to know</div>
      <p>
        Using the tablet to read books or to help you build LEGO
        creations is considered <em>constructive</em> because it helps develop
        your brain and encourages creativity — which are both <strong>good</strong>
        things!
      </p>
    </div>

  </div>

  <?php require_once __DIR__ . '/../../includes/bottom-progress-menu.php'; ?>
</body>
</html>
