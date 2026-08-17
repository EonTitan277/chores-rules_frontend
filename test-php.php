<?php
/**
 * PHP Configuration Test Page
 * Visit http://chores-app.test/test-php.php to verify setup
 */

echo "<h1>PHP Configuration Test</h1>";
echo "<h2>PHP Version: " . PHP_VERSION . "</h2>";

// Test PDO MySQL
echo "<h3>PDO MySQL Extension</h3>";
if (extension_loaded('pdo_mysql')) {
    echo "<p style='color: green;'>✅ PDO MySQL extension is loaded</p>";
} else {
    echo "<p style='color: red;'>❌ PDO MySQL extension is NOT loaded</p>";
    echo "<p>Enable it in Laragon: Menu → PHP → Extensions → pdo_mysql</p>";
}

// Test Database Connection
echo "<h3>Database Connection Test</h3>";
require_once __DIR__ . '/../includes/config.php';

try {
    $dsn = "mysql:host=" . MYSQL_HOST . ";dbname=" . MYSQL_DB . ";charset=utf8mb4";
    $pdo = new PDO($dsn, MYSQL_USER, MYSQL_PASSWORD, [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
        PDO::ATTR_EMULATE_PREPARES => false,
    ]);
    
    echo "<p style='color: green;'>✅ Database connection successful!</p>";
    
    // Test query
    $stmt = $pdo->query("SELECT COUNT(*) as count FROM users");
    $result = $stmt->fetch();
    echo "<p>Users in database: " . $result['count'] . "</p>";
    
    // Show users
    $stmt = $pdo->query("SELECT username, role FROM users");
    $users = $stmt->fetchAll();
    if ($users) {
        echo "<table border='1' cellpadding='5'>";
        echo "<tr><th>Username</th><th>Role</th></tr>";
        foreach ($users as $user) {
            echo "<tr><td>" . htmlspecialchars($user['username']) . "</td><td>" . htmlspecialchars($user['role']) . "</td></tr>";
        }
        echo "</table>";
    }
    
} catch (PDOException $e) {
    echo "<p style='color: red;'>❌ Database connection failed: " . $e->getMessage() . "</p>";
    echo "<p>Check your .env file for correct database credentials.</p>";
    echo "<p>For Laragon defaults: MYSQL_HOST=localhost, MYSQL_USER=root, MYSQL_PASSWORD= (empty)</p>";
}

// Test Writable Directories
echo "<h3>Writable Directories Test</h3>";
$dirs = [
    'data' => DATA_PATH,
    'logs' => LOGS_PATH,
];

foreach ($dirs as $name => $path) {
    if (is_dir($path) && is_writable($path)) {
        echo "<p style='color: green;'>✅ $name directory is writable: $path</p>";
    } else {
        echo "<p style='color: red;'>❌ $name directory issue: $path</p>";
        if (!is_dir($path)) {
            echo "<p>Directory does not exist. Create it or check .env path.</p>";
        } elseif (!is_writable($path)) {
            echo "<p>Directory exists but not writable. Check Windows permissions.</p>";
        }
    }
}

// Test Session
echo "<h3>Session Test</h3>";
session_start();
$_SESSION['test'] = 'Session working at ' . date('H:i:s');
echo "<p style='color: green;'>✅ Session started: " . $_SESSION['test'] . "</p>";

// Show key config values (sanitized)
echo "<h3>Configuration (sanitized)</h3>";
$configKeys = ['HOST_PORT', 'WEBROOT_PATH', 'MYSQL_HOST', 'MYSQL_DB', 'MYSQL_USER', 'COUNCIL_NAME'];
echo "<table border='1' cellpadding='5'>";
echo "<tr><th>Key</th><th>Value</th></tr>";
foreach ($configKeys as $key) {
    $value = constant($key) ?? 'NOT SET';
    if (strpos($key, 'PASSWORD') !== false || strpos($key, 'SECRET') !== false) {
        $value = '***HIDDEN***';
    }
    echo "<tr><td>$key</td><td>$value</td></tr>";
}
echo "</table>";

echo "<hr>";
echo "<p><a href='login.php'>← Back to Login</a></p>";

echo "<hr>";
echo "<p><small>Test completed at " . date('Y-m-d H:i:s') . "</small></p>";