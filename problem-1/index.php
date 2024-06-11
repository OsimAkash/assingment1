<?php

function findMinAbsValue(array $numbers): int
{

    //Handle empty list case

    if (empty($numbers)) {
        return null;
    }

    // Initialize minimum value with the absolute value of the first element

    $minAbsValue = abs($numbers[0]);

    foreach ($numbers as $number) {
        $minAbsValue = min($minAbsValue, abs($number));
    }
    return $minAbsValue;
}

// List of integers
$numbers = [10, 12, 15, 189, 22, 2, 34];

$minAbsValue = findMinAbsValue($numbers);

echo "Minimum absolute value: $minAbsValue";
