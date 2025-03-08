<?php
// Function to check if a number is palindrome
function isPalindrome($num) {
    $original = $num;  // Store original number
    $reverse = 0;

    // Reverse the number
    while ($num > 0) {
        $digit = $num % 10;  // Get last digit
        $reverse = ($reverse * 10) + $digit;  // Build reversed number
        $num = (int)($num / 10);  // Remove last digit
    }

    // Check if original and reversed numbers are the same
    if ($original == $reverse) {
        return true;
    } else {
        return false;
    }
}

// Input number
$number = 121; // Change this number to test

// Check if palindrome
if (isPalindrome($number)) {
    echo "$number is a Palindrome Number.";
} else {
    echo "$number is NOT a Palindrome Number.";
}
?>
