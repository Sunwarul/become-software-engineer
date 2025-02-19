<?php

/**
 * Compare the keys of two arrays, and return the differences
 * (Array Compliment)
 * 
 * Definition and Usage
 * The array_diff_key() function compares the keys of two (or more) arrays, and returns the differences.
 * This function compares the keys of two (or more) arrays, and return an array that contains the *entries from array1 that are 
 * not present in array2 or array3, etc.
 * 
 * Syntax
 * array_diff_key(array1, array2, array3, ...)
 */

$arr_one = ['key1' => 1, 'key2' => 2];
$arr_two = ['key1' => 10, 'key3' => 3];
print_r(array_diff_key($arr_one, $arr_two));

/*
    Array
    (
        [key2] => 2
    )
    ['key3' =>3] Also different but as its only give the differences from first entry like complement operation. 
*/