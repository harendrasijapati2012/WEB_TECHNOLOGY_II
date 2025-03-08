<?php
session_start();  // Start the session

$_SESSION["username"] = "JohnDoe";  // Store username
$_SESSION["role"] = "Admin";  // Store user role

echo "Session data set successfully!";
?>
