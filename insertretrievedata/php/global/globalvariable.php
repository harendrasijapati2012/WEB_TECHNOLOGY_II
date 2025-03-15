<?php
$x = 10;
$y = 20;

function addNumbers() {
    global $x, $y;  
    return $x + $y;
}

echo "Sum: " . addNumbers();
?>
