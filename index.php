<?php
/**
 * Entry point - redirects based on authentication state
 * This allows clean URLs like http://chores-app.test/
 */

require_once __DIR__ . '/../includes/session.php';

startAppSession();

// Keep authenticated users on the dashboard; send everyone else to login.
$destination = isset($_SESSION['user_id']) ? 'dashboard.php' : 'login.php';
header('Location: ' . $destination);
exit;