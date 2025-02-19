<?php

/**
 * Compare the keys of two arrays (using a user-defined key comparison function), and return the differences:
 */

$arr_1 = ['a' => 'Red', 'b' => 'Green', 'c' => 'Blue'];
$arr_2 = ['a' => 'Green', 'b' => 'Red', 'd' => 'Light Blue'];

function key_compare_func($a, $b)
{
    return $a === $b ? 0 : ($a > $b ? 1 : -1);
}

// print_r(array_diff_ukey($arr_1, $arr_2, fn ($a, $b) => $a === $b ? 0 : ($a > $b ? 1 : -1)));
print_r(array_diff_ukey($arr_1, $arr_2, 'key_compare_func'));
