<?php
// Database configuration
if (!defined('HOST')) define('HOST', 'localhost'); // Database hostname or IP
if (!defined('DBUSER')) define('DBUSER', 'root');    // Database user
if (!defined('PASS')) define('PASS', 'metoric');    // Database password
if (!defined('DB')) define('DB', 'db_test');        // Database name

// Establish the MySQL connection
$conn = mysqli_connect(HOST, DBUSER, PASS, DB);

// Check the connection
if (!$conn) {
    // Log error to a file and show a generic message
    error_log('MySQL connection failed: ' . mysqli_connect_error(), 3, '/path/to/error.log');
    die('Could not connect to the database. Please try again later.');
}

?>
