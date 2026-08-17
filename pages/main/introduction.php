<?php
require_once __DIR__ . '/../../../includes/auth-check.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Introduction</title>
  <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700;800;900&family=Fredoka+One&display=swap" rel="stylesheet" />
  <link rel="stylesheet" href="../../main.css">
</head>
<body class="has-top-menu">

  <?php
  require_once __DIR__ . '/../../includes/page-menu.php';
  ?>

  <!-- HEADER -->
  <header>
    <div class="emoji-row">📖</div>
    <h1 style="color: var(--text);">Introduction</h1>
    <p class="subtitle">Understanding why these rules exist and what they mean for you.</p>
  </header>

  <!-- SECTION 1 -->
  <div class="section purple">
    <div class="section-header">
      <div class="section-icon icon-bg">☑️</div>
      <div class="section-title txt-color">How This System Works For You</div>
    </div>
    <div class="card">
      <p style="font-size:1rem; line-height:1.75;">
        Recently, your mother took away all your screens and was going to permanently get rid of
        them because of your <a href="/pages/definitions/dishonest.php">dishonesty</a> and bad behavior — even when we gave you a second
        chance to prove yourself with a 1-week Responsibility Test.<br>
        However, after careful consideration, it was decided that going back to these rules is a better
        way to go. You can, again, earn your screen time instead of losing it forever.<br>
        This is a fair consequence <strong>for your own actions and choices</strong>, and <a href="/pages/definitions/abide.php">abiding</a> a by these rules
        will help show your mother that you can be trusted with screens.<br>
        These rules will give clarity and consistency to what is expectated from you from now on, and they will help
        balance daily responsabilities with making sure you still get a chance to enjoy
        the things you love, like your gaming and TV time.
      </p>
    </div>
  </div>

  <hr class="divider">

  <!-- SECTION 2 -->
  <div class="section blue">
    <div class="section-header">
      <div class="section-icon icon-bg">📺</div>
      <div class="section-title txt-color">Earning Your Screen Time</div>
    </div>
    <div class="card">
      <p style="font-size:1rem; line-height:1.75;">
        <strong>Screen time is a reward</strong> only for being a responsible member of the house. Electronics are not
        a <a href="/pages/definitions/guarantee.php">guaranteed</a> part of the day, but we want to make sure you still have a fair way to
        earn them. By following these rules and guidelines, you are showing that you can be trusted,
        and that you can handle responsibilities and your entertainment at the same time.
      </p>
    </div>
  </div>

  <hr class="divider">

  <!-- SECTION 3 -->
  <div class="section green">
    <div class="section-header">
      <div class="section-icon icon-bg">📈</div>
      <div class="section-title txt-color">Helping Your Home Succeed</div>
    </div>
    <div class="card">
      <p style="font-size:1rem; line-height:1.75;">
        Before these rules were put to use, chores were not getting done and things were starting to
        get disorganized and unsanitary. Your mother has been working very hard every day to take care of the
        family, so by doing your part and having good <a href="/pages/definitions/manners.php">manners</a>, you are showing her a lot
        of support and respect. At home, everyone plays a part — including you. If you set your mind
        to it, you can help your home succeed <em>and</em> still have your screen time.
      </p>
    </div>
  </div>

  <hr class="divider">

  <!-- SECTION 4 -->
  <div class="section yellow">
    <div class="section-header">
      <div class="section-icon icon-bg">🧭</div>
      <div class="section-title txt-color">Your Path Forward</div>
    </div>
    <div class="card">
      <p style="font-size:1rem; line-height:1.75;">
        This system was designed specifically with your schedule, your Saturday, and your favorite
        activities in mind. While the rules might feel strict right now, they are here to encourage you
        to help your mother while also giving you a clear and fair way to earn screen time. As you
        show that you can be responsible, the rules can become less strict over time. We’re eager to
        see you reach success and grow! 🤝💛
      </p>
    </div>
  </div>

  <?php require_once __DIR__ . '/../../includes/bottom-progress-menu.php'; ?>
</body>
</html>
