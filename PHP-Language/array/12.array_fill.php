<?php

/**
 * Array fill fills an array
 * 
 * array_fill(index, number, value)
 * index => index of the returned array
 * number => number of elements to insert, exclusive
 * value => It specifies value to filling the array
 */

$my_array = array_fill(5, 10, 'Default value');
print_r($my_array);

/*

Array
(
    [5] => Default value
    [6] => Default value
    [7] => Default value
    [8] => Default value
    [9] => Default value
    [10] => Default value
    [11] => Default value
    [12] => Default value
    [13] => Default value
    [14] => Default value
)

*/