<?php

declare(strict_types=1);

require_once __DIR__ . '/../includes/config.php';
require_once __DIR__ . '/../includes/db.php';
require_once __DIR__ . '/../includes/client-ip.php';
require_once __DIR__ . '/../includes/login-rate-limit.php';
require_once __DIR__ . '/../includes/auth-logging.php';
require_once __DIR__ . '/../includes/session.php';
require_once __DIR__ . '/../includes/cache.php';

sendNoCacheHeaders();

// --- Step 2: Login handler (runs before any HTML output) -------------------

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    // Start the configured session so we can regenerate it on success.
    startAppSession();

    // Guard against CSRF: require a session token matching the form's hidden field.
    if (empty($_SESSION['csrf_token'])) {
        $_SESSION['csrf_token'] = bin2hex(random_bytes(32));
    }
    $submittedToken = $_POST['csrf_token'] ?? '';
    if (!is_string($submittedToken) || !hash_equals($_SESSION['csrf_token'], $submittedToken)) {
        session_unset();
        session_destroy();
        header('Location: login.php?error=1');
        exit;
    }

    // Pull and trim credentials. Don't reveal which field was wrong on failure.
    $username = isset($_POST['username']) ? trim((string) $_POST['username']) : '';
    $password = (string) ($_POST['password'] ?? '');
    $clientIp = getClientIp();

    $loginOk = false;
    $rateLimited = false;
    $row = false;

    try {
        $pdo = getDb();
        $rateLimited = countRecentLoginAttempts($pdo, $clientIp) >= LOGIN_ATTEMPT_LIMIT;

        if (!$rateLimited && $username !== '' && $password !== '') {
            $stmt = $pdo->prepare('SELECT id, username, password_hash, role FROM users WHERE username = :username LIMIT 1');
            $stmt->bindValue(':username', $username, PDO::PARAM_STR);
            $stmt->execute();
            $row = $stmt->fetch();
        }
    } catch (PDOException $e) {
        // Don't leak DB errors to the user; treat as a failed login.
        $row = false;
    }

    if ($row !== false && !empty($row['password_hash'])) {
        if (password_verify($password, $row['password_hash'])) {
            // Success: regenerate the session ID to prevent fixation.
            session_regenerate_id(true);

            // Store the authenticated user's identity in the session.
            $_SESSION['user_id']  = (int) $row['id'];
            $_SESSION['username'] = $row['username'];
            $_SESSION['role']     = $row['role'];
            $_SESSION['session_expires_at'] = time() + SESSION_LIFETIME;

            $loginOk = true;
        }
    }

    if (!$loginOk && isset($pdo) && $pdo instanceof PDO) {
        try {
            recordLoginAttempt($pdo, $clientIp);
        } catch (PDOException $e) {
            // A database logging failure must not expose details to the user.
        }
    }

    if (!$loginOk) {
        logFailedLogin($clientIp, $username);
    }

    if ($loginOk) {
        // Send the user to the dashboard after a successful login.
        header('Location: dashboard.php');
        exit;
    }

    // Failure: tear down any session state created above and redirect back with a generic error.
    session_unset();
    if (session_status() === PHP_SESSION_ACTIVE) {
        session_destroy();
    }
    header('Location: login.php?error=1');
    exit;
}

// --- GET: display the form -------------------------------------------------

// For the GET branch, start a session only long enough to issue a CSRF token.
startAppSession();
if (empty($_SESSION['csrf_token'])) {
    $_SESSION['csrf_token'] = bin2hex(random_bytes(32));
}
$csrfToken = $_SESSION['csrf_token'];

$loginError = '';
if (isset($_GET['error']) && $_GET['error'] === '1') {
    $loginError = 'Incorrect username or password. Please try again.';
}
$loginFailed = $loginError !== '';
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Chores & Rules</title>
  <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700;800;900&family=Fredoka+One&display=swap" rel="stylesheet" />
  <link rel="stylesheet" href="main.css">
  <link rel="stylesheet" href="login.css">
</head>
<body>

  <!-- ── LOGIN ── -->
  <div id="loginWrap">
    <header style="margin-bottom:0; text-align:center;">
      <div class="emoji-row">🎮 📋 ⭐</div>
      <h1>Chores & Rules</h1>
      <p class="subtitle">Enter your credentials to continue.</p>
    </header>

    <!-- POSTs to this same file; Step 2 adds the verification branch. -->
    <form action="login.php" method="POST" autocomplete="on">
      <input type="hidden" name="csrf_token" value="<?php echo htmlspecialchars($csrfToken, ENT_QUOTES, 'UTF-8'); ?>" />
      <div class="login-card">
        <div class="login-title">🔒 Login</div>
        <p class="login-sub">Enter your username and password, then press Enter or click the button.</p>
        <input
          id="usernameInput"
          class="login-input username<?php echo $loginFailed ? ' login-input--shake' : ''; ?>"
          type="text"
          name="username"
          placeholder="Username"
          autocomplete="username"
          required
        />
        <input
          id="passwordInput"
          class="login-input password<?php echo $loginFailed ? ' login-input--shake' : ''; ?>"
          type="password"
          name="password"
          placeholder="••••••••"
          autocomplete="current-password"
          required
        />
        <button class="login-btn" type="submit">Let me in →</button>
        <div id="loginError" class="login-error"><?php echo htmlspecialchars($loginError, ENT_QUOTES, 'UTF-8'); ?></div>
      </div>
    </form>
  </div>
</body>
</html>
