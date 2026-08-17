<?php
require_once __DIR__ . '/../../../includes/auth-check.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Mom's Time</title>
  <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700;800;900&family=Fredoka+One&display=swap" rel="stylesheet" />
  <link rel="stylesheet" href="../../main.css">
</head>
<body class="has-top-menu">

  <?php
  require_once __DIR__ . '/../../includes/page-menu.php';
  ?>

  <!-- HEADER -->
  <header>
    <div class="emoji-row">🧘 ⏱️ 📵</div>
    <h1>Mom's 2-Hour Break</h1>
    <p class="subtitle">When Mom asks for quiet time, this is how it works.</p>
  </header>

  <!-- INTRO -->
  <div id="Intro" class="intro-box">
    <strong>What is Mom's Time?</strong><br>
      When your mother asks for 2 hours of alone time, a special time period begins where you <strong>cannot bother her for anything</strong> — except for a real emergency. If you leave her alone for those 2 hours, you earn <strong>1 hour of bonus screen time</strong>, even if you are punished from screens!<br>
      <strong>Why this matters:</strong><br>
      Mom works hard every day to care for you and the home. Sometimes she needs rest and time alone so she can recharge. Respecting that time is one of the <em>most</em> important things you can do for her.
  </div>

  <!-- SECTION 1: MOM'S TIME -->
  <div id="Section1" class="section magenta">
    <div class="section-header">
      <div class="section-icon icon-bg">🌙</div>
      <div class="section-title txt-color">Section 1 — Mom's Time</div>
    </div>
    <div class="card">
      <ul class="rule-list">
        <li>
          <div class="rule-num">1</div>
          <div><strong>This only happens when Mom asks for it.</strong> Mom's Time might not happen every day — it only starts when your mother explicitly says she needs 2 hours alone. This can only happen <strong>once per day</strong>.</div>
        </li>
        <li>
          <div class="rule-num">2</div>
          <div><strong>You cannot bother her for 2 full hours.</strong> That means <strong>no texting, calling, knocking, opening her door, trying to get her attention, or asking questions</strong>. Do not bother her about anything during this time.</div>
        </li>
        <li>
          <div class="rule-num">3</div>
          <div><strong>Real emergencies are the only exception.</strong> The only time you can interrupt is if there is a real emergency. Do not make up emergencies or you will face a consequence.
          <br><p style="margin-top: 7px;">The examples below are not the only emergencies that exist, and this list does not limit what counts as one. Use your best judgment. When in doubt, ask yourself: <em>“Could someone get seriously hurt, or could something get seriously damaged if I wait until morning?”</em> If yes, that is likely an emergency.</p>
            <div class="note-box mom-box">
              <div class="note-title">🚨 Examples of Real Emergencies</div>
              <div class="note-grid" style="grid-template-columns: repeat(auto-fit, minmax(180px, 1fr));">
                <div class="note-item"><span>🔥</span> There is a fire or smoke in the house</div>
                <div class="note-item"><span>🩸</span> Someone is badly hurt and/or bleeding</div>
                <div class="note-item"><span>🤢</span> You are seriously sick or in extreme pain</div>
                <div class="note-item"><span>🌊</span> There is a flood or water leak</div>
                <div class="note-item"><span>🚪</span> Someone strange is trying to get inside</div>
                <div class="note-item"><span>⚡</span> A dangerous power or electrical problem</div>
              </div>
            </div>
          </div>
        </li>
        <li>
            <div class="rule-num">4</div>
            <div><strong>What is NOT an emergency:</strong> being bored, wanting a snack, having a question, wanting to show her something, or anything that can safely wait until later. If it can wait, it must wait.<div>
        </li>
        <li>
          <div class="rule-num">5</div>
          <div><strong>You cannot ask when Mom's Time will happen.</strong> Do not ask your mom when or if Mom's Time will happen — not today, not tomorrow, not any day. If you ask about Mom's Time on any day, you lose the reward opportunity for that day.</div>
        </li>
        <li>
          <div class="rule-num">6</div>
          <div><strong>If you succeed, you earn 1 hour of screen time.</strong> After 2 hours of leaving her alone (with no disturbances), you unlock <strong><span class="badge badge-magenta">1 hour of bonus screen time</span></strong> for that day — on top of any screen time you already earned from chores. This hour follows your normal screen time rules and must end by <strong>9 PM</strong> (or <strong>10 PM on Saturdays</strong> if earned).</div>
        </li>
        <li>
          <div class="rule-num">7</div>
          <div><strong>This reward works even if you are punished from screens.</strong> This is a special exception because respecting your mom's rest time is so important. It gives you a chance to earn some screen time through good behavior, and also helps show that you can be a responsible and independent.</div>
        </li>
      </ul>
    </div>
  </div>

  <!-- FOOTER -->
  <footer>
    <p style="margin-top:8px;">Respect her peace, earn your reward, and make Mom proud! 💗</p>
    <div class="revision">Revision 1</div>
  </footer>

  <?php require_once __DIR__ . '/../../includes/bottom-progress-menu.php'; ?>
</body>
</html>
