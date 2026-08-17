<?php
require_once __DIR__ . '/../../../includes/auth-check.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Consequences & Punishments</title>
  <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700;800;900&family=Fredoka+One&display=swap" rel="stylesheet" />
  <link rel="stylesheet" href="../../main.css">
  <link rel="stylesheet" href="tables.css">
</head>
<body class="has-top-menu" data-checkbox-state-url="/api/consequence-checkbox-states.php">

  <?php
  require_once __DIR__ . '/../../includes/page-menu.php';
  ?>

  <header>
    <div class="emoji-row">⚠️ ⚖️ 🛑</div>
    <h1 style="color: #d31841;">Consequences & Punishments</h1>
    <p class="subtitle" style="font-size: 1.1rem;">Remember, your choices have consequences.</p>
    <?php require_once __DIR__ . '/../../includes/reset-checkboxes-button.php'; ?>
  </header>

  <!-- INTRO -->
  <div id="Intro" class="note-box">
    <strong>One misbehavior = one consequence.</strong><br>
    For any one misbehavior, you will get <strong>one</strong> consequence that fits the situation.<br>
    <strong>But here’s the important part:</strong> if the same bad behavior keeps happening, the consequence might get bigger each time. And if behavior still does not improve, adding more than one consequence will have to be considered.
  </div>

  <div id="mild-consequences" class="quick-ref yellow">
    <div class="section-header">
      <div class="section-icon icon-bg">⚠️</div>
      <div class="section-title txt-color">Mild Consequences</div>
    </div>
    <table>
      <thead>
        <tr>
          <th>#</th>
          <th>Consequence</th>
          <th>Applied?</th>
        </tr>
      </thead>
      <tbody>
        <tr><td class="num-col">1</td><td>Sweep the floor</td><td><input type="checkbox" class="checkbox restricted" data-key="consequences-1"></td></tr>
        <tr><td class="num-col">2</td><td>Wash your own clothes</td><td><input type="checkbox" class="checkbox restricted" data-key="consequences-2"></td></tr>
        <tr><td class="num-col">3</td><td>No sweets for 1 week</td><td><input type="checkbox" class="checkbox restricted" data-key="consequences-3"></td></tr>
        <tr><td class="num-col">4</td><td>No e-reading</td><td><input type="checkbox" class="checkbox restricted" data-key="consequences-4"></td></tr>
        <tr><td class="num-col">5</td><td>No online building instructions or building help</td><td><input type="checkbox" class="checkbox restricted" data-key="consequences-5"></td></tr>
      </tbody>
    </table>
  </div>

  <div id="moderate-consequences" class="quick-ref orange">
    <div class="section-header">
      <div class="section-icon icon-bg">🔥</div>
      <div class="section-title txt-color">Moderate Consequences</div>
    </div>
    <table>
      <thead>
        <tr>
          <th>#</th>
          <th>Consequence</th>
          <th>Applied?</th>
        </tr>
      </thead>
      <tbody>
        <tr><td class="num-col">6</td><td>A toy is thrown away</td><td><input type="checkbox" class="checkbox restricted" data-key="consequences-6"></td></tr>
        <tr><td class="num-col">7</td><td>Write a book report on a topic mom chooses</td><td><input type="checkbox" class="checkbox restricted" data-key="consequences-7"></td></tr>
        <tr><td class="num-col">8</td><td>Spend 2-3 hours at the laundry mat waiting for clothes to finish</td><td><input type="checkbox" class="checkbox restricted" data-key="consequences-8"></td></tr>
        <tr><td class="num-col">9</td><td>No audio stories on the phone</td><td><input type="checkbox" class="checkbox restricted" data-key="consequences-9"></td></tr>
        <tr><td class="num-col">10</td><td>No TV for 3 days</td><td><input type="checkbox" class="checkbox restricted" data-key="consequences-10"></td></tr>
        <tr><td class="num-col">11</td><td>No electronics unsupervised for 3 days</td><td><input type="checkbox" class="checkbox restricted" data-key="consequences-10"></td></tr>        
        <tr><td class="num-col">12</td><td>No electronics at all for 3 days</td><td><input type="checkbox" class="checkbox restricted" data-key="consequences-12"></td></tr>
      </tbody>
    </table>
  </div>

  <div id="serious-consequences" class="quick-ref red">
    <div class="section-header">
      <div class="section-icon icon-bg">🛑</div>
      <div class="section-title txt-color">Serious Consequences</div>
    </div>
    <table>
      <thead>
        <tr>
          <th>#</th>
          <th>Consequence</th>
          <th>Applied?</th>
        </tr>
      </thead>
      <tbody>
        <tr><td class="num-col">13</td><td>A scoop of LEGO parts disappears</td><td><input type="checkbox" class="checkbox restricted" data-key="consequences-13"></td></tr>
        <tr><td class="num-col">14</td><td>1-week grounding (no social contact or playing outside)</td><td><input type="checkbox" class="checkbox restricted" data-key="consequences-14"></td></tr>
        <tr><td class="num-col">15</td><td>Time subtracted from screens</td><td><input type="checkbox" class="checkbox restricted" data-key="consequences-15"></td></tr>
        <tr><td class="num-col">16</td><td>No play or fun time on weekends (only sitting on the couch)</td><td><input type="checkbox" class="checkbox restricted" data-key="consequences-16"></td></tr>
        <tr><td class="num-col">17</td><td>No TV for 1 week</td><td><input type="checkbox" class="checkbox restricted" data-key="consequences-17"></td></tr>
        <tr><td class="num-col">18</td><td>No electronics unsupervised for 1 week</td><td><input type="checkbox" class="checkbox restricted" data-key="consequences-18"></td></tr>
        <tr><td class="num-col">19</td><td>No electronics at all for 1 week</td><td><input type="checkbox" class="checkbox restricted" data-key="consequences-19"></td></tr>
      </tbody>
    </table>
  </div>

  <script src="../../js/persistence.js"></script>
  <?php require_once __DIR__ . '/../../includes/bottom-progress-menu.php'; ?>
</body>
</html>