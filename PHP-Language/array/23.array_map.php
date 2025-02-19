<?php


/**
 * array_map(callback|closure,array1,array2,array3...)
 */

 $array = [1,2,3,4,5];

//  $result_array = array_map(function($item) {return  $item * $item;}, $array);
 $result_array = array_map(fn($item) => $item * $item, $array);
 print_r($result_array);

// Array
// (
//     [0] => 1
//     [1] => 4
//     [2] => 9
//     [3] => 16
//     [4] => 25
// )