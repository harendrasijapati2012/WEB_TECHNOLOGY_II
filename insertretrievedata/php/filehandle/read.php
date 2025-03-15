<?php
$filename = "example.txt";
$file = fopen($filename, "r"); // Open file in read mode

$content = fread($file, filesize($filename)); // Read content
fclose($file); // Close file

echo "File Content: " . $content;
?>
