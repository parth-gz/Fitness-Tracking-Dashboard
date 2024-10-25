<?php
// logout.php - Handle user logout
session_start();

// Unset all session variables
$_SESSION = array();

// Destroy the session
session_destroy();

// Redirect to login page
header("location: login.html");
exit;
?>