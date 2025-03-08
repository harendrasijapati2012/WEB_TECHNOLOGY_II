<?php
session_start();  // Resume session

if(isset($_SESSION["username"])) {
    echo "Welcome, " . $_SESSION["username"] . "!<br>";
    echo "Your role is: " . $_SESSION["role"];
} else {
    echo "No session found. Please log in.";
}
?>
