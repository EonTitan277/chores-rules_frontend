<?php
require_once __DIR__ . '/../../../includes/auth-check.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>My Chore Rules</title>
  <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700;800;900&amp;family=Fredoka+One&amp;display=swap" rel="stylesheet">
  <link rel="stylesheet" href="../../main.css">
</head>
<body class="has-top-menu">

  <?php
  require_once __DIR__ . '/../../includes/page-menu.php';
  ?>

  <!-- HEADER -->
  <header>
    <div class="emoji-row">🎮 📋 ⭐</div>
    <h1>My Chore &amp; Screen Time Rules</h1>
    <p class="subtitle">These rules are here to help things go smoothly every day — for everyone!</p>
  </header>

  <!-- INTRO -->
  <div id="Intro" class="intro-box">
    <strong>Why were these rules created?</strong><br>
      Things have not been going smoothly, and these rules are here to fix that. They give
      everyone — including you — a clear, fair system to get things running smoothly. With these
      rules, you will always know what is expected, what you earn when you meet those
      expectations, and what happens when you don’t.<br>
      <strong>What we want you to know:</strong><br>
      These rules are firm because they need to be right now — not because we don’t care about
      you. We do. Your Saturday schedule, your gaming time, and the things that matter to you
      were all thought about when these rules were made. If you do your part, good things will
      follow. 😊 We believe you can do this. ❤️
  </div>

  <!-- SECTION 1: DAILY CHORES -->
  <div id="Section1" class="section blue">
    <div class="section-header">
      <div class="section-icon icon-bg">🧹</div>
      <div class="section-title txt-color">Section 1 — Daily Chores &amp; Quests</div>
    </div>
    <div class="card">
      <ul class="rule-list">
        <li>
          <div class="rule-num">1</div>
          <div>Every day, you have <strong class="badge badge-blue">14 chores</strong> to complete. <strong class="badge badge-blue">11 daily chores and 3 evening chores.</strong> These are easy chores — nothing too hard or too long.</div>
        </li>
        <li>
          <div class="rule-num">2</div>
          <div>You must complete all <strong>14 chores</strong> (out of 22 quests) to be rewarded <a href="#Section2">screen time</a> for the <strong>following day</strong>.</div>
        </li>
        <li>
          <div class="rule-num">3</div>
          <div>Finishing <strong>all 22 total quests</strong> is <em>always</em> the goal — and doing so comes with a special reward! (See <a href="#Section3">Section 3</a> and <a href="#Section5">5</a>.)</div>
        </li>
      </ul>
    </div>
  </div>

  <!-- SECTION 2: DAILY SCREEN TIME -->
  <div id="Section2" class="section green">
    <div class="section-header">
      <div class="section-icon icon-bg">⏱️</div>
      <div class="section-title txt-color">Section 2 — Daily Screen Time</div>
    </div>
    <div class="card">
      <ul class="rule-list">
        <li>
          <div class="rule-num">1</div>
          <div>Screen time is a <strong>reward</strong>, not a guaranteed part of your day.</div>
        </li>
        <li>
          <div class="rule-num">2</div>
          <div>Once you have finished <strong>all <span class="badge badge-green">14 chores <em>and</em> maintained good behaviors,</span></strong> you unlock <strong><span class="badge badge-green">2 hours</span></strong> of screen time <strong>for the following day</strong>.</div>
        </li>
        <li>
          <div class="rule-num">3</div>
          <div>
            For every <a href="/pages/main/chores-table.php#eveing-chores">evening chore</a> not completed beyond your required <strong>11 </strong> regular chores,
            you lose <strong><span class="badge badge-green">30 minutes</span></strong> of screen time the following day. For example, if you leave 2 of
            your evening chores undone, you lose half of your screen-time the following day.
          </div>
        </li>
        <li>
          <div class="rule-num">4</div>
          <div>If you have done <strong>fewer than 12 chores</strong>, there is <strong>no screen time</strong> the following day.</div>
        </li>
        <li>
          <div class="rule-num">5</div>
          <div>Screen time includes video games, TV, talking on the phone, Echo games, and the Switch — <strong>all these screens</strong> count toward the 2-hour limit.</div>
        </li>
        <li>
          <div class="rule-num">6</div>
          <div>Using the tablet does not count towards the 2-hour limit because your activities on it are <a href="/pages/definitions/constructive.php">constructive</a>.</div>
        </li>
      </ul>

      <div class="note-box">
        <div class="note-title">📌 A Note About Things Outside Your Control</div>
        <p style="font-size:0.95rem; line-height:1.65;">
          <strong>Sometimes things happen that are outside your control.</strong> If something beyond your
          control kept you from finishing your required chores, your mother can handle it one of two
          ways: she can assign you a few extra chores to make up the difference, or she can <a href="/pages/definitions/waive.php">waive</a>
          the chore requirement for that day entirely. Either way, you can still earn your screen time
          and your weekend bonus if you have earned it. <strong>This decision is <em>hers</em> to make.</strong>
          <br>
          <strong>Make-up chores</strong> only help you get back to your normal screen time — they cannot earn you <em>extra</em> screen time. The daily limit is always 2 hours, unless it’s a weekend and you earned the bonus described in <a href="#Section3">Section 3</a>.
        </p>
      </div>
    </div>
  </div>

  <!-- SECTION 3: WEEKEND BONUS -->
  <div id="Section3" class="section yellow">
    <div class="section-header">
      <div class="section-icon icon-bg">🌟</div>
      <div class="section-title txt-color">Section 3 — Weekend Bonus Screen Time</div>
    </div>
    <div class="card">
      <ul class="rule-list">
        <li>
          <div class="rule-num">1</div>
          <div>As an extra incentive to do your chores, you have the chance to earn <strong><span class="badge badge-yellow">2 extra hours</span></strong> of bonus screen time for the weekend — <strong>on top</strong> of your regular 2 hours!</div>
        </li>
        <li>
          <div class="rule-num">2</div>
          <div>To earn this bonus, <strong>two things</strong> must both be true:
            <br>✅ &nbsp;Your chores were done consistently all week long.
            <br>✅ &nbsp;Your behavior was good throughout the week.
          </div>
        </li>
        <li>
          <div class="rule-num">3</div>
          <div>This bonus was added because we know that sometimes you need more time in games — like when you’re working on a big project or want to hang out with friends online.</div>
        </li>
        <li>
          <div class="rule-num">4</div>
          <div><strong>Weekend days</strong> for this bonus are <strong>Friday, Saturday, and Sunday</strong>.</div>
        </li>
      </ul>
    </div>
  </div>

  <hr class="divider">

  <!-- SECTION 4: SATURDAY SPECIAL RULES -->
  <div id="Section4" class="section teal">
    <div class="section-header">
      <div class="section-icon icon-bg">🌅</div>
      <div class="section-title txt-color">Section 4 — Saturday Special Rules</div>
    </div>
    <div class="card">
      <ul class="rule-list">
        <li>
          <div class="rule-num">1</div>
          <div>Saturday is a special day with its own set of rules. <strong>You only have to complete 4 regular chores and 3 evening chores on Saturday</strong> — numbers <strong>1, 6, 10, and 11</strong>, and <strong>I, II, and III</strong> — to unlock the next day’s screen time. That’s it. No other chores are required that day. However, you must also maintain good behaviors <strong>A through H</strong> if you want to keep your bonus time.</div>
        </li>
        <li>
          <div class="rule-num">2</div>
          <div>The 4 regular chores can be done <strong>before the sun sets</strong>.</div>
        </li>
        <li>
          <div class="rule-num">3</div>
          <div>Once your 4 regular Saturday chores are done, you unlock your <strong><span class="badge" style="background:#ccfbf1;color:#0f766e;">2 hours</span></strong> of screen time for the following day, just like any other day.</div>
        </li>
        <li>
          <div class="rule-num">4</div>
          <div>On Saturdays, your screens can stay on as late as <strong><span class="badge" style="background:#ccfbf1;color:#0f766e;">10:00 PM</span> only</strong> if you are quiet and respectful. This means if your screen time is still going at 9 PM, you do not have to stop. You can keep going until your time runs out or 10 PM arrives, whichever comes first.</div>
        </li>
        <li>
          <div class="rule-num">5</div>
          <div><strong>Important:</strong> The 10 PM rule is about screens — not bedtime. If your screen time runs out before 10 PM and after 9 PM, that is when you go to bed. You do not get to stay up just because it is Saturday. After 9 PM, When your screens go off, you go to bed.</div>
        </li>
        <li>
          <div class="rule-num">6</div>
          <div>This is a firm rule — <strong>no ifs, ands, or buts.</strong> The 10 PM cutoff will not be extended further.</div>
        </li>
      </ul>
    </div>
  </div>

  <hr class="divider">

  <!-- SECTION 5: WEEKLY MONEY REWARD -->
  <div id="Section5" class="section orange">
    <div class="section-header">
      <div class="section-icon icon-bg">💰</div>
      <div class="section-title txt-color">Section 5 — Your Weekly Money Reward</div>
    </div>
    <div class="card">
      <ul class="rule-list">
        <li>
          <div class="rule-num">1</div>
          <div>If you complete <strong><em>all</em> 22 quests every day</strong> for the full week, you will earn <strong><span class="badge badge-orange">$4.00</span></strong> at the end of that week. This money is yours to keep!</div>
        </li>
        <li>
          <div class="rule-num">2</div>
          <div>You can spend your money on things like <strong>LEGO sets, video games, digital currency</strong> (such as Robux or V-Bucks), or other toys — as long as they are approved by your mother first.</div>
        </li>
        <li>
          <div class="rule-num">3</div>
          <div>The best part? <strong>Every dollar you save makes your next purchase even better.</strong> Instead of spending right away, try saving up — because the things you <em>really</em> want cost more, and the feeling of earning them yourself is awesome.</div>
        </li>
      </ul>

      <div class="note-box">
        <div class="note-title">🏦 Look how fast your savings can grow!</div>
        <p style="font-size:0.95rem; line-height:1.65;">
          You earn <strong>$4 every week</strong> when all your quests are done. Here is what you could save up for:
        </p>
        <div class="note-grid" style="grid-template-columns: repeat(auto-fit, minmax(150px, 1fr));">
          <div class="note-item"><span>💎</span> 2 weeks = $8 for digital currency</div>
          <div class="note-item"><span>🚂</span> 4 weeks = $16 toward a small toy</div>
          <div class="note-item"><span>🎮</span> 8 weeks = $32 toward a game</div>
          <div class="note-item"><span>🏆</span> 12 weeks = $48 for something really big!</div>
          <div class="note-item"><span><img style="width: 1.4em; margin: 2px;" src="/images/lego.svg"></span> 1 year = $192 for a big LEGO set!</div>
        </div>
        <p style="margin-top:12px; font-size:0.75rem; line-height:1.6;">(This list is just to give you ideas — there are lots of other things you could save up for instead! You get to choose!)</p>
        <p style="margin-top:12px; font-size:0.9rem; line-height:1.6;">
          Imagine opening something you saved up for <em>all by yourself</em>. That feeling is way better than spending it right away on something small. The longer you save, the cooler the reward. 🚀
        </p>
      </div>
    </div>
  </div>

  <hr class="divider">

  <!-- SECTION 6: MOM'S QUIET HOURS -->
  <div id="Section6" class="section magenta">
    <div class="section-header">
      <div class="section-icon icon-bg">🌙</div>
      <div class="section-title txt-color">Section 6 — Mom’s Quiet Hours</div>
    </div>
    <div class="card">
      <ul class="rule-list">
        <li>
          <div class="rule-num">1</div>
          <div>Every single day — <strong>from 9:00 PM to 9:00 AM</strong> — Mom is <strong><em>not</em></strong> to be disturbed. This applies <strong>every night, no exceptions.</strong></div>
        </li>
        <li>
          <div class="rule-num">2</div>
          <div>This is her personal, private time. She needs this rest in order to take care of herself — and to take care of you. It is not negotiable and it is not something she should have to ask for. It is hers.</div>
        </li>
        <li>
          <div class="rule-num">3</div>
          <div>During these hours, <strong>do not open her door, knock on her door, call for her, text her, or try to get her attention</strong> for any reason — unless it is a <em>real</em> emergency.</div>
        </li>
        <li>
          <div class="rule-num">4</div>
          <div><strong>What counts as a real emergency?</strong> The examples below are not the only emergencies that exist, and this list does not limit what counts as one. Use your best judgment. When in doubt, ask yourself: <em>“Could someone get seriously hurt, or could something get seriously damaged if I wait until morning?”</em> If yes, that is likely an emergency.
            <div class="note-box mom-box">
              <div class="note-title">🚨 Examples of Real Emergencies</div>
              <div class="note-grid" style="grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));">
                <div class="note-item"><span>🔥</span> There is a fire or smoke in the house</div>
                <div class="note-item"><span>🩸</span> Someone is badly hurt and/or bleeding</div>
                <div class="note-item"><span>🤢</span> You are seriously sick or in real pain</div>
                <div class="note-item"><span>🌊</span> There is a flood or water leak</div>
                <div class="note-item"><span>🚪</span> Someone strange is trying to get inside</div>
                <div class="note-item"><span>⚡</span> A dangerous power or electrical problem</div>
              </div>
            </div>
          </div>
        </li>
        <li>
          <div class="rule-num">5</div>
          <div><strong>What is NOT an emergency:</strong> being bored, wanting a snack, having a question, not being able to sleep, wanting to show her something, or anything that can safely wait until 9 AM. If it can wait, it <em>must</em> wait.</div>
        </li>
        <li>
          <div class="rule-num">6</div>
          <div>Mom works hard every day to take care of you and your home. These hours are how she recharges. <strong>Respecting her quiet time is one of the most important things you can do for her.</strong> 💗</div>
        </li>
        <li>
          <div class="rule-num">7</div>
          <div>If her quiet time is not respected, or if you are dishonest about an emergency, there <strong>will be a consequence</strong>.</div>
        </li>
      </ul>
    </div>
  </div>

  <!-- SECTION 7: WHEN YOU'RE SICK -->
  <div id="Section7" class="section purple">
    <div class="section-header">
      <div class="section-icon icon-bg">🤒</div>
      <div class="section-title txt-color">Section 7 — When You’re Sick</div>
    </div>
    <div class="card">
      <ul class="rule-list">
        <li>
          <div class="rule-num">1</div>
          <div><strong>If you’re too sick to do chores, you don’t have to do them.</strong> Your body needs rest to get better.</div>
        </li>
        <li>
          <div class="rule-num">2</div>
          <div><strong>If you’re too sick for chores, you’re also too sick for screens that day.</strong> No chores means no screens that day — even if you already earned screen time before getting sick.</div>
        </li>
        <li>
          <div class="rule-num">3</div>
          <div><strong>This is not a punishment.</strong> Screen time is a reward, and when you’re too sick for chores, you’re also too sick to enjoy that reward. So you wait until you feel better to use it.</div>
        </li>
        <li>
          <div class="rule-num">4</div>
          <div><strong>Earned screen time does not disappear when you’re sick.</strong> Example: you finish your chores Monday. That earns screen time for Tuesday. If you’re sick Tuesday, you don’t lose that earned time — you use it as soon as you’re well enough.</div>
        </li>
        <li>
          <div class="rule-num">5</div>
          <div><strong>As soon as you’re well again, screen time works normally right away.</strong> You don’t have to wait extra days to catch up.</div>
        </li>
        <li>
          <div class="rule-num">6</div>
          <div><strong>Don’t pretend to be sick.</strong> Lying about being sick has consequences.</div>
        </li>
        <li>
          <div class="rule-num">7</div>
          <div><strong>If you’re mildly sick</strong>, you only need to do <strong>minor chores</strong> to earn screen time. Mom will tell you which chores count.</div>
        </li>
        <li>
          <div class="rule-num">8</div>
          <div><strong>Mom decides</strong> <em>(with your input)</em> if you’re too sick for chores, or if you should do minor chores. Her decision is final.</div>
        </li>
      </ul>

      <div class="note-box">
        <div class="note-title">📌 What Is Being Too Sick?</div>
        <p style="font-size:0.95rem; line-height:1.65;">
          <em>The examples below are not the only illnesses considered <strong>too sick</strong>, and this list does not limit what counts as "too sick".</em>
          <br>
          Examples of being <strong>too sick</strong>: fever, vomiting, serious pain, too ill to get out of bed, etc,...
          <br>
          Examples of <strong>mildly sick</strong>: a cold, a stomach bug, coughing, an ear infection, etc,... You can still do easy chores.
        </p>
      </div>
    </div>
  </div>

  <!-- SECTION 8: TIME WITH DAD -->
  <div id="Section8" class="section blue">
    <div class="section-header">
      <div class="section-icon icon-bg">📞</div>
      <div class="section-title txt-color">Section 8 — Time With Dad</div>
    </div>
    <div class="card">
      <ul class="rule-list">
        <li>
          <div class="rule-num">1</div>
          <div>Time with your dad is special — that is why it has its own rules.</div>
        </li>
        <li>
          <div class="rule-num">2</div>
          <div>On days when you talk or play with your dad, you always get <strong>at least 30 minutes of game time with him</strong> — even if you did not earn screen time the day before. This is a special exception made just for him.</div>
        </li>
        <li>
          <div class="rule-num">3</div>
          <div>Your time with your dad can last up to <strong>2 hours total</strong>. You get to choose how to use it:
            <br>🎮 &nbsp;Play for 30 minutes, then talk for up to 1.5 hours.
            <br>📞 &nbsp;Skip the games and just talk for the full 2 hours.
            <br>👋 &nbsp;Or end the call early whenever you’re ready.
          </div>
        </li>
        <li>
          <div class="rule-num">4</div>
          <div><strong>If you earned screen time the day before:</strong> your dad time comes out of your 2 hours for that day. If you end the call early, whatever time is left is yours to use on your own screens.</div>
        </li>
        <li>
          <div class="rule-num">5</div>
          <div><strong>If you did not earn screen time the day before:</strong> you still get your dad time as a special exception — but ending the call early or skipping your game time does not give you any leftover screen time because nothing was earned.</div>
        </li>
        <li>
          <div class="rule-num">6</div>
          <div><strong>Want more than 30 minutes of game time with your dad?</strong> Do your chores the day before. More game time has to be earned.</div>
        </li>
        <li>
          <div class="rule-num">7</div>
          <div><strong>Make-up chores cannot change any of this.</strong> That is not what they are for. See the note in <a href="#Section2">Section 2</a> for details.</div>
        </li>
      </ul>
    </div>
  </div>

  <!-- SECTION 9: THE COUNCIL -->
  <div id="Section9" class="section red">
    <div class="section-header">
      <div class="section-icon icon-bg">⚖️</div>
      <div class="section-title txt-color">Section 9 — The Council</div>
    </div>
    <div class="card">
      <ul class="rule-list">
        <li>
          <div class="rule-num">1</div>
          <div>These rules are <strong>firm</strong>. That means there are <strong>no <a href="/pages/definitions/compromise.php">compromises</a></strong> in the moment — no negotiating, no arguing, no trying to change the rules on the spot. <em>(If you do try to change a rule on the spot, there will be a consequence.)</em></div>
        </li>
        <li>
          <div class="rule-num">2</div>
          <div>However, if you have a concern about a rule — like something feels unfair or doesn’t make sense — you have the right to bring it to <strong>The Council</strong>.</div>
        </li>
        <li>
          <div class="rule-num">3</div>
          <div><strong>The Council</strong> is actually just <strong class="c-name"><?php echo htmlspecialchars((string) env('COUNCIL_NAME', ''), ENT_QUOTES, 'UTF-8'); ?></strong>, lol. He can be reached by text message at <strong><span class="badge badge-red c-phone"><?php echo htmlspecialchars((string) env('COUNCIL_PHONE', ''), ENT_QUOTES, 'UTF-8'); ?></span></strong>. A concern may also be presented in person.</div>
        </li>
        <li>
          <div class="rule-num">4</div>
          <div><strong>Before</strong> bringing an issue to The Council, <strong>you must first</strong> try to <em>calmly</em> resolve the problem with your mother. She is the head of the household, so <strong>she should be <a href="/pages/definitions/petition.php">petitioned</a> first</strong>.</div>
        </li>
        <li>
          <div class="rule-num">5</div>
          <div>Before The Council will consider any issue, <strong>two people must both share their side</strong> of the story — <strong>you</strong> and <strong>your mother</strong>. <span class="c-name"><?php echo htmlspecialchars((string) env('COUNCIL_NAME', ''), ENT_QUOTES, 'UTF-8'); ?></span> needs to hear both perspectives before he can make a fair decision.</div>
        </li>
        <li>
          <div class="rule-num">6</div>
          <div>Once both sides have been heard, The Council will decide whether a compromise should be considered. His decision is final.</div>
        </li>
        <li>
          <div class="rule-num">7</div>
          <div>The right way to share a concern is <em>calmly and respectfully</em> — not by arguing or getting upset. Bringing a concern to The Council is always okay. Ignoring the rules is not.</div>
        </li>
      </ul>
    </div>
  </div>

  <!-- OUTRO -->
  <div id="Outro" class="outro-box">
    <div>These rules exist because of where things are right now — not where they have to stay forever. <strong>If your behavior and obedience improve over time, the rules can become less strict.</strong> The better things go, the more freedom you can earn. That is entirely up to you. 🌱</div>
  </div>

  <!-- FOOTER -->
  <footer>
    <p>These rules were made because we <strong>care about you</strong> and want things to go well — for you and for everyone around you. ❤️</p>
    <p style="margin-top:8px;">Do your chores, be kind, and enjoy your screen time. You’ve got this! ⭐</p>

    <!-- Increment this revision number with each revision -->
    <div class="revision">Revision 7</div>
  </footer>

  <?php require_once __DIR__ . '/../../includes/bottom-progress-menu.php'; ?>
</body>
</html>