<?php

function fibonacci($n) {
    $fib = array();
    $fib[0] = 0;
    $fib[1] = 1;

    echo "Fibonacci Series for the first {$n} numbers : ";

    for ($i = 2; $i < $n; $i++) {
        $fib[$i] = $fib[$i -1] + $fib[$i-2];
    }

    for ($i =0; $i < $n; $i++) {
        echo $fib[$i];
        if ($i < $n -1) {
            echo " ";
        }
    }
}

$numberTerms =15;
fibonacci($numberTerms);