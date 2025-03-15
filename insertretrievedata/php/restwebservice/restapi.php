<?php
header("Content-Type: application/json");

// Sample Data
$students = [
    ["id" => 1, "name" => "John", "course" => "Computer Science"],
    ["id" => 2, "name" => "Alice", "course" => "Information Technology"]
];

// Convert to JSON and Display
echo json_encode($students);
?>
        