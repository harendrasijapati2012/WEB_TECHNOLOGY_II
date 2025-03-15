<?php
$n = 10; 
$num1 = 0; 
$num2 = 1; 

echo "Fibonacci Series: $num1, $num2";

for ($i = 2; $i < $n; $i++) {  
    $nextNum = $num1 + $num2;  
    echo ", $nextNum";  
    $num1 = $num2;  
    $num2 = $nextNum;  
}
?>
