<?php

/**
 * The array_filter() function filters the values of an array using a callback function.
 * This function passes each value of the input array to the callback function. If the callback function returns true, the current value from input is returned into the result array. Array keys are preserved.
 * array_filter(array, callbackfunction, flag)
 */

function test_odd($value)
{
    return $value & 1;
}

$arr = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
print_r(array_filter($arr, 'test_odd'));

// Array
// (
//     [0] => 1
//     [2] => 3
//     [4] => 5
//     [6] => 7
//     [8] => 9
// )

print_r(array_filter(['2.5', 3, 4, 6, 9], 'test_odd'));

// Array
// (
//     [1] => 3
//     [4] => 9
// )