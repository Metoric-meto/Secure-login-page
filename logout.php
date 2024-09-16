<?php 
session_start();

// Unset specific session variables
unset($_SESSION['loginid']);
unset($_SESSION['username']);

// Destroy the session
session_destroy();

// Redirect to index.php
header('Location: index.php');
exit(); // Ensure no further code is executed after the redirect
?>
