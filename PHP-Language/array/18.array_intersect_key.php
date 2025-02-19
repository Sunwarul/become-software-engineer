<?php

/**
 * Intersect based on keys and values
 */
$arr1 = ['one' => 1, 'two' => 2, 'three' => 3];
$arr2 = ['one' => 3, 'notTwo' => 2, 'three' => 23];
print_r(array_intersect_key($arr1, $arr2));

// Array
// (
//     [one] => 1
//     [three] => 3
// ) 