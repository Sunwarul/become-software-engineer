<?php 

$arr = range('a', 'd');

$result_array = array_map(fn($item) => strtoupper($item), $arr);

print_r($result_array);

// Array
// (
//     [0] => A
//     [1] => B
//     [2] => C
//     [3] => D
// )