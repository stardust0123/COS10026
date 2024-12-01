<?php
session_start();

// To unset all session variables
session_unset();

// Destroy the session
session_destroy();

// Redirect the user to the login page
header("Location: login.php");
exit();
?>