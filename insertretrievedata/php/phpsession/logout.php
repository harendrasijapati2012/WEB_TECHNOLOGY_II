<?php
session_start();
session_destroy();  // Destroy the session
echo "You have been logged out!";
?>
