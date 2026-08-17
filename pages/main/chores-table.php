<?php
require_once __DIR__ . '/../../../includes/auth-check.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>My Daily Quests & Choices</title>
  <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700;800;900&family=Fredoka+One&display=swap" rel="stylesheet" />
  <link rel="stylesheet" href="../../main.css">
  <link rel="stylesheet" href="tables.css">
</head>
<body class="has-top-menu" data-checkbox-state-url="/api/checkbox-states.php">

  <?php
  require_once __DIR__ . '/../../includes/page-menu.php';
  ?>

  <header>
    <div class="emoji-row">⚔️ 🗺️ 🏆</div>
    <h1>My Quest Tracker</h1>
    <p class="subtitle">Complete your quests and make awesome choices to unlock your rewards!</p>
    <?php require_once __DIR__ . '/../../includes/reset-checkboxes-button.php'; ?>
  </header>

  <div id="chores" class="quick-ref blue">
    <div class="section-header">
      <div class="section-icon icon-bg">🧹</div>
      <div class="section-title txt-color">Daily Chores</div>
    </div>
    <table>
      <thead>
        <tr>
          <th>#</th>
          <th>Chore</th>
          <th>Done?</th>
        </tr>
      </thead>
      <tbody>
        <tr><td class="sub-header" colspan="3">✨ Fresh Start</td></tr>
        <tr class="chore-row"><td class="num-col">1</td><td>Make your bed</td><td><input type="checkbox" class="checkbox" data-key="chore-1"></td></tr>
        <tr class="chore-row"><td class="num-col">2</td><td>Brush your teeth</td><td><input type="checkbox" class="checkbox" data-key="chore-2"></td></tr>

        <tr><td class="sub-header" colspan="3">⚡ Power Up</td></tr>
        <tr class="chore-row"><td class="num-col">3</td><td>Finish your homework</td><td><input type="checkbox" class="checkbox" data-key="chore-3"></td></tr>
        <tr class="chore-row"><td class="num-col">4</td><td>Clean your desk</td><td><input type="checkbox" class="checkbox" data-key="chore-4"></td></tr>
        <tr class="chore-row"><td class="num-col">5</td><td>Put your dirty clothes in the hamper <em>(mom will wash & dry)</em></td><td><input type="checkbox" class="checkbox" data-key="chore-5"></td></tr>

        <tr><td class="sub-header" colspan="3">🦸 Save the Day</td></tr>
        <tr class="chore-row"><td class="num-col">6</td><td>Clean up your messes <em>(including your food from the floor)</em></td><td><input type="checkbox" class="checkbox" data-key="chore-6"></td></tr>
        <tr class="chore-row"><td class="num-col">7</td><td>Take out the trash</td><td><input type="checkbox" class="checkbox" data-key="chore-7"></td></tr>
        <tr class="chore-row"><td class="num-col">8</td><td>Wash the dirty dishes / Load the dishwasher</td><td><input type="checkbox" class="checkbox" data-key="chore-8"></td></tr>

        <tr><td class="sub-header" colspan="3">🏁 Home Stretch</td></tr>
        <tr class="chore-row"><td class="num-col">9</td><td>Put away the clean dishes / Empty dishwasher</td><td><input type="checkbox" class="checkbox" data-key="chore-9"></td></tr>
        <tr class="chore-row"><td class="num-col">10</td><td>Clean up some toys <em>(and make a path for mom or get punished)</em></td><td><input type="checkbox" class="checkbox" data-key="chore-10"></td></tr>
        <tr class="chore-row"><td class="num-col">11</td><td>Take a shower</td><td><input type="checkbox" class="checkbox" data-key="chore-11"></td></tr>

        <tr><td class="sub-header" colspan="3">💅 Makeup Chores</td></tr>
        <tr class="chore-row"><td class="num-col">12</td><td contenteditable="true" data-key="text-12"></td><td><input type="checkbox" class="checkbox" data-key="chore-12"></td></tr>
        <tr class="chore-row"><td class="num-col">13</td><td contenteditable="true" data-key="text-13"></td><td><input type="checkbox" class="checkbox" data-key="chore-13"></td></tr>
        <tr class="chore-row"><td class="num-col">14</td><td contenteditable="true" data-key="text-14"></td><td><input type="checkbox" class="checkbox" data-key="chore-14"></td></tr>
        <tr class="chore-row"><td class="num-col">15</td><td contenteditable="true" data-key="text-15"></td><td><input type="checkbox" class="checkbox" data-key="chore-15"></td></tr>
      </tbody>
    </table>
  </div>

  <div id="eveing-chores" class="quick-ref purple">
    <div class="section-header">
      <div class="section-icon icon-bg">🌚</div>
      <div class="section-title txt-color">Evening Chores</div>
    </div>
    <table>
      <thead>
        <tr>
          <th>#</th>
          <th>Chore</th>
          <th>Done?</th>
        </tr>
      </thead>
      <tbody>
        <tr class="chore-row"><td class="num-col">I</td><td>Brush your teeth <em>(after 8 PM)</em></td><td><input type="checkbox" class="checkbox" data-key="chore-#i"></td></tr>
        <tr class="chore-row"><td class="num-col">II</td><td>Put on PJs <em>(after 8 PM)</em></td><td><input type="checkbox" class="checkbox" data-key="chore-ii"></td></tr>
        <tr class="chore-row"><td class="num-col">III</td><td>Go to bed on time</td><td><input type="checkbox" class="checkbox" data-key="chore-iii"></td></tr>
        <tr class="chore-row"><td class="num-col">IV</td><td contenteditable="true" data-key="text-iv"></td><td><input type="checkbox" class="checkbox" data-key="chore-iv"></td></tr>
        <tr class="chore-row"><td class="num-col">V</td><td contenteditable="true" data-key="text-v"></td><td><input type="checkbox" class="checkbox" data-key="chore-v"></td></tr>
        <tr class="chore-row"><td class="num-col">VI</td><td contenteditable="true" data-key="text-vi"></td><td><input type="checkbox" class="checkbox" data-key="chore-vi"></td></tr>
        <tr class="chore-row"><td class="num-col">VII</td><td contenteditable="true" data-key="text-vii"></td><td><input type="checkbox" class="checkbox" data-key="chore-vii"></td></tr>
      </tbody>
    </table>
  </div>

  <div id="good-behaviors" class="quick-ref yellow">
    <div class="section-header">
      <div class="section-icon icon-bg">🏅</div>
      <div class="section-title txt-color">Good Behaviors</div>
    </div>
    <table>
      <thead>
        <tr>
          <th>#</th>
          <th>Behavior</th>
          <th>Done?</th>
        </tr>
      </thead>
      <tbody>
        <tr class="chore-row"><td class="num-col">A</td><td>Didn’t disobey</td><td><input type="checkbox" class="checkbox" data-key="chore-a"></td></tr>
        <tr class="chore-row"><td class="num-col">B</td><td>Didn’t whine</td><td><input type="checkbox" class="checkbox" data-key="chore-b"></td></tr>
        <tr class="chore-row"><td class="num-col">C</td><td>Didn’t <a href="/pages/definitions/back-talking.php">talk back</a></td><td><input type="checkbox" class="checkbox" data-key="chore-c"></td></tr>
        <tr class="chore-row"><td class="num-col">D</td><td>Didn’t yell</td><td><input type="checkbox" class="checkbox" data-key="chore-d"></td></tr>
        <tr class="chore-row"><td class="num-col">E</td><td>Didn’t lie</td><td><input type="checkbox" class="checkbox" data-key="chore-e"></td></tr>
        <tr class="chore-row"><td class="num-col">F</td><td>Wasn’t <a href="/pages/definitions/dishonest.php">dishonest</a></td><td><input type="checkbox" class="checkbox" data-key="chore-f"></td></tr>
        <tr class="chore-row"><td class="num-col">G</td><td>Wasn’t disrespectful</td><td><input type="checkbox" class="checkbox" data-key="chore-g"></td></tr>
        <tr class="chore-row"><td class="num-col">H</td><td>Only ate in the kitchen</td><td><input type="checkbox" class="checkbox" data-key="chore-h"></td></tr>
        <tr class="chore-row"><td class="num-col">I</td><td contenteditable="true" data-key="text-i"></td><td><input type="checkbox" class="checkbox" data-key="chore-i"></td></tr>
        <tr class="chore-row"><td class="num-col">J</td><td contenteditable="true" data-key="text-j"></td><td><input type="checkbox" class="checkbox" data-key="chore-j"></td></tr>
        <tr class="chore-row"><td class="num-col">K</td><td contenteditable="true" data-key="text-k"></td><td><input type="checkbox" class="checkbox" data-key="chore-k"></td></tr>
        <tr class="chore-row"><td class="num-col">L</td><td contenteditable="true" data-key="text-L"></td><td><input type="checkbox" class="checkbox" data-key="chore-L"></td></tr>
      </tbody>
    </table>
  </div>

  <script src="../../js/persistence.js"></script>
  <?php require_once __DIR__ . '/../../includes/bottom-progress-menu.php'; ?>
  <script src="https://cdn.jsdelivr.net/npm/canvas-confetti@1.9.4/dist/confetti.browser.min.js"></script>
  <script src="../../js/chore-fireworks.js"></script>
</body>
</html>