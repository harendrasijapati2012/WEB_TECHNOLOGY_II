<?php
// Function to sum dynamic parameters
function sumNumbers(...$numbers) {
    return array_sum($numbers); // Using array_sum() to calculate sum
}

// Example calls
echo "Sum: " . sumNumbers(10, 20, 30) . "<br>"; // Output: Sum: 60
echo "Sum: " . sumNumbers(5, 15, 25, 35, 45) . "<br>"; // Output: Sum: 125
?>
