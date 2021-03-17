<?php

/**
 * Intersect based on values
 */
$arr1 = ['one' => 1, 'two' => 2, 'three' => 3];
$arr2 = ['one' => 3, 'notTwo' => 2, 'three' => 3];
print_r(array_intersect($arr1, $arr2));

// Array
// (
//     [two] => 2
//     [three] => 3
// )