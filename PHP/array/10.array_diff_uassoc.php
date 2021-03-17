<?php

/**
 * Compare the keys and values of two arrays (use a user-defined function to compare the keys), and return the differences.
 */

$first_array = ['one' => 1, 'two' => 2, 'three' => 3, 'four' => 4];
$second_array = ['one' => 1, 'four' => 4, 'three' => 4];

function findGreaterFromFirstKeyEntries($a, $b)
{
    // if ($a === $b) {
    //     return 0;
    // } else {
    //     return ($a > $b) ? 1 : -1;
    // }
    return $a === $b ? 0 : ($a > $b ? 1 : -1);
}

$res = array_diff_uassoc($first_array, $second_array, 'findGreaterFromFirstKeyEntries');
print_r($res);

/*
    Array
    (
        [two] => 2
        [three] => 3
    )
*/