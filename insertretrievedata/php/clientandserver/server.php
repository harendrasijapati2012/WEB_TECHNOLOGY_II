<?php
// Simple PHP script that handles form data
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    echo "Hello, " . $name . "! This is Server-Side Scripting.";
}
?>
