<?php
function factorial($num) {
    $fact = 1;
    for ($i = 1; $i <= $num; $i++) {
        $fact *= $i;
    }
    return $fact;
}

// Calling the function
$number = 5;
echo "Factorial of $number is: " . factorial($number);
?>
