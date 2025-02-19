<?php

$my_array = [1, 2, 3, 4, 5];
$squared_array = array_map(fn ($item) => $item * 2, $my_array);

print_r($squared_array);

/* 
Array
(
    [0] => 2
    [1] => 4
    [2] => 6
    [3] => 8
    [4] => 10
) 
*/