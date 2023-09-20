<?php

// for loop
function evenNumbersFor($start, $end, $step) {
    if ($start % 2 !== 0) {
        $start += 1;
    }

    for ($i = $start; $i <= $end; $i += $step) {
            echo $i . " ";
        }
    
}

evenNumbersFor(1, 20, 2);
echo "\n";

// while loop
function evenNumbersWhile($start, $end, $step) {
    if ($start % 2 !== 0) {
        $start++;
    }

    while ($start <= $end) {
        echo $start . " ";
        $start += $step;
    }
}

evenNumbersWhile(1, 20, 2);
echo "\n";

// do-while loop
function evenNumbersDoWhile($start, $end, $step) {
    if ($start % 2 !== 0) {
        $start++;
    }
    do {
        echo $start . " ";
        $start += $step;
    } while ($start <= $end);
}

evenNumbersDoWhile(1, 20, 2);

