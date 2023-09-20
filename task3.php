<?php

// initial first 10 Fibonacci print
$firstFibonacci = 0;
$secondFibonacci = 1;

echo $firstFibonacci . " " . $secondFibonacci . " "; 

for ($i = 3; $i <= 10; $i++) {
    $nextFibonacci = $firstFibonacci + $secondFibonacci;

    echo $nextFibonacci ." ";

$firstFibonacci = $secondFibonacci;
$secondFibonacci = $nextFibonacci;

}

echo "\n";


// if Fibonacci number is greater than 100
$firstFibonacci1 = 0;
$secondFibonacci1 = 1;

echo $firstFibonacci1 . " " . $secondFibonacci1 . " "; 

for ($i = 3; $i <= 15; $i++) {
    $nextFibonacci1 = $firstFibonacci1 + $secondFibonacci1;
    
    if ($nextFibonacci1 > 100) {
        break;
    }
    echo $nextFibonacci1 . " ";

$firstFibonacci1 = $secondFibonacci1;
$secondFibonacci1 = $nextFibonacci1;

}


