<?php
session_start();

// Destroy the session and clear session variables
session_unset();
session_destroy();

// Redirect to the login page or home page
header("Location: login.php"); // Change this to your login or home page
exit();