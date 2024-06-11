<?php

function printNumberPattern(int $n)
{

    if ($n <= 0) {

        throw new InvalidArgumentException("Input Number must be positive.");
    }

    for ($i = 1; $i <= $n; $i++) {

        for ($j = 1; $j < $i; $j++) {

            echo $j . " ";
        }
        echo PHP_EOL;
    }
}

$n = 5;

try {
    printNumberPattern($n);
} catch (Exception $e) {
    echo "Error: " . $e->getMessage();
}
