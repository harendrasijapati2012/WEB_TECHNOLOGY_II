<?php
$filename = "example.txt";
$file = fopen($filename, "w");  // Open file in write mode

$text = "Hello, this is a sample file!";
fwrite($file, $text);  // Write text to file

fclose($file);  // Close file
echo "Data written to file successfully!";
?>
