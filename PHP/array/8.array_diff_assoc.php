<?php

/**
 * Compare the keys and values of two arrays, and return the differences
 */

$a1 = array("a" => "red", "b" => "green", "c" => "blue", "d" => "yellow");
$a2 = array("e" => "red", "f" => "green", "g" => "blue");

$result = array_diff_assoc($a1, $a2);
print_r($result);

/*

Array
(
    [a] => red
    [b] => green
    [c] => blue
    [d] => yellow
)
Because entries from array1 are unique that next arrays.
*/

$arr_1 = ['first' => 'John', 'second' => 'Jane'];
$arr_2 = ['first' => 'John', 'second' => 'James'];

print_r(array_diff_assoc($arr_1, $arr_2));

/*
Array
(
    [second] => Jane
)
*/