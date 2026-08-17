<?php
require_once __DIR__ . '/../../../includes/auth-check.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>School Break Screen Time Rules</title>
  <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700;800;900&family=Fredoka+One&display=swap" rel="stylesheet" />
  <link rel="stylesheet" href="../../main.css">
</head>
<body class="has-top-menu">

  <?php
  require_once __DIR__ . '/../../includes/page-menu.php';
  ?>

  <!-- HEADER -->
  <header>
    <div class="emoji-row">☀️ 🏖️ ⏱️</div>
    <h1>School Break Screen Time Rules</h1>
    <p class="subtitle">Extra screen time rules for when you’re on school break — like summer break!</p>
  </header>

  <!-- INTRO -->
  <div id="Intro" class="intro-box">
    <strong>When do these rules apply?</strong><br>
      These rules only apply when you are on school break — like summer break, winter break, spring break, or any other time when school is not in session. When school is in session, your regular screen time rules from the main rules page apply instead.<br>
      <strong>Why the extra time?</strong><br>
      We know that when you're not in school, you don't have much to do at home. Because of this, we are giving you an extra hour of screen time on school break days. This is a special bonus just for school breaks.
  </div>

  <!-- SECTION 1: THE BASICS -->
  <div id="Section1" class="section green">
    <div class="section-header">
      <div class="section-icon icon-bg">⏱️</div>
      <div class="section-title txt-color">Section 1 — The Basics</div>
    </div>
    <div class="card">
      <ul class="rule-list">
        <li>
          <div class="rule-num">1</div>
          <div>On school break days, you can earn <strong><span class="badge badge-green">3 hours</span></strong> of screen time for the following day — instead of the usual 2 hours.</div>
        </li>
        <li>
          <div class="rule-num">2</div>
          <div>To earn these 3 hours, you must complete <strong>all <span class="badge badge-green">14 chores</span></strong> (out of 22 quests) the day before — just like on regular days.</div>
        </li>
        <li>
          <div class="rule-num">3</div>
          <div>If you complete <strong>fewer than 12 chores</strong>, there is <strong>no screen time</strong> the following day — just like on regular days.</div>
        </li>
        <li>
          <div class="rule-num">4</div>
          <div>This extra hour is a <strong>school break bonus</strong> — it only applies when school is not in session.</div>
        </li>
      </ul>
    </div>
  </div>

  <!-- SECTION 2: HOW TO USE YOUR 3 HOURS -->
  <div id="Section2" class="section blue">
    <div class="section-header">
      <div class="section-icon icon-bg">🎮</div>
      <div class="section-title txt-color">Section 2 — How to Use Your 3 Hours</div>
    </div>
    <div class="card">
      <ul class="rule-list">
        <li>
          <div class="rule-num">1</div>
          <div><strong>You cannot use all 3 hours at once.</strong> You must split your screen time into smaller sessions.</div>
        </li>
        <li>
          <div class="rule-num">2</div>
          <div>You have <strong>two choices</strong> for how to split your time:
            <ul style="margin-top:4px; margin-left:20px; list-style:disc;">
              <li><span><strong>Option 1:</strong> Three sessions of <strong>1 hour each</strong></span></li>
              <li><span><strong>Option 2:</strong> Two sessions of <strong>1.5 hours each</strong></span></li>
            </ul>
          </div>
        </li>
        <li>
          <div class="rule-num">3</div>
          <div><strong>Between sessions, you must take a break.</strong> This break should be at least 30 minutes long. During your break, do something that does not involve screens — like playing outside, reading, drawing, or helping around the house.</div>
        </li>
        <li>
          <div class="rule-num">4</div>
          <div><strong>You choose when to take your sessions.</strong> You can spread them out throughout the day, or do them closer together — as long as you take breaks between them.</div>
        </li>
        <li>
          <div class="rule-num">5</div>
          <div><strong>All screen time still ends at 9 PM</strong> on school break days — unless your bedtime has been extended.</div>
        </li>
      </ul>
      </div>
    </div>
  </div>

  <!-- SECTION 3: SCHOOL BREAK VS WEEKEND BONUS -->
  <div id="Section3" class="section orange">
    <div class="section-header">
      <div class="section-icon icon-bg">🌟</div>
      <div class="section-title txt-color">Section 3 — School Break vs. Weekend Bonus</div>
    </div>
    <div class="card">
      <ul class="rule-list">
        <li>
          <div class="rule-num">1</div>
          <div><strong>Weekend bonus and school break bonus do not stack.</strong> You cannot get both bonuses on the same day.</div>
        </li>
        <li>
          <div class="rule-num">2</div>
          <div><strong>If you earned the weekend bonus:</strong> On Friday, Saturday, or Sunday, you get your <strong>weekend bonus</strong> instead of the school break bonus. The weekend bonus is 2 extra hours (4 hours total), which is more than the school break bonus.</div>
        </li>
        <li>
          <div class="rule-num">3</div>
          <div><strong>If you did NOT earn the weekend bonus:</strong> On Friday, Saturday, or Sunday during school break, you can still get the <strong>school break bonus</strong> of 1 extra hour (3 hours total). This way, you still get some extra time even if you missed the weekend bonus.</div>
        </li>
      </ul>

      <div class="note-box">
        <div class="note-title">📌 Quick Summary</div>
        <p style="font-size:0.97rem; line-height:1.65;">
          <strong>Weekend days (Fri, Sat, Sun) during school break:</strong>
        </p>
        <ul style="margin-top:8px; margin-left:28px; list-style:disc; font-size:0.93rem;">
          <li>If you earned weekend bonus → <strong>4 hours total</strong> (weekend bonus)</li>
          <li>If you did NOT earn weekend bonus → <strong>3 hours total</strong> (school break bonus)</li>
        </ul>
        <p style="margin-top:12px; font-size:0.97rem; line-height:1.65;">
          <strong>Weekdays (Mon-Thu) during school break:</strong>
        </p>
        <ul style="margin-top:8px; margin-left:28px; list-style:disc; font-size:0.93rem;">
          <li>If you earned it → <strong>3 hours total</strong> (school break bonus)</li>
        </ul>
      </div>
    </div>
  </div>

  <!-- SECTION 4: IMPORTANT NOTE -->
  <div id="Section4" class="section red">
    <div class="section-header">
      <div class="section-icon icon-bg">📋</div>
      <div class="section-title txt-color">Section 4 — Important Note</div>
    </div>
    <div class="card">
      <ul class="rule-list">
        <li>
          <div class="rule-num">1</div>
          <div><strong>All other rules still apply.</strong> Everything in the main rules page — about chores, behavior, consequences, Mom's quiet hours, being sick, time with Dad, and The Council — still applies during school break. These school break rules only add to what already exists.</div>
        </li>
      </ul>
    </div>
  </div>

  <!-- FOOTER -->
  <footer>
    <p style="margin-top:8px;">Enjoy your extra screen time, and make the most of your school break! ⭐</p>
    <!-- Increment this revision number with each revision -->
    <div class="revision">Revision 1</div>
  </footer>

  <?php require_once __DIR__ . '/../../includes/bottom-progress-menu.php'; ?>
</body>
</html>