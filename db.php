<?php
/**
 * db.php — Database Configuration
 * Update these credentials to match your XAMPP setup.
 */

define('DB_HOST',     'localhost');
define('DB_USER',     'root');       // default XAMPP user
define('DB_PASS',     '');           // default XAMPP password (empty)
define('DB_NAME',     'uniclub_db');
define('DB_PORT',     3306);

$conn = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME, DB_PORT);

if ($conn->connect_error) {
    // Show a friendly error — do NOT expose credentials in production
    die("
    <div style='font-family:sans-serif; background:#0B1F3A; color:#fff;
                min-height:100vh; display:flex; align-items:center; justify-content:center;'>
      <div style='text-align:center; padding:2rem;'>
        <h2 style='color:#E05555; margin-bottom:0.75rem;'>⚠ Database Connection Failed</h2>
        <p style='color:#8A9BB0;'>Could not connect to <strong style=\"color:#fff\">uniclub_db</strong>.</p>
        <p style='color:#8A9BB0; margin-top:0.5rem;'>
          Make sure XAMPP MySQL is running and you have imported <code>database.sql</code>.
        </p>
      </div>
    </div>");
}

$conn->set_charset('utf8mb4');
