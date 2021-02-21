<?php

$arr_one = ['one', 'two', 'three'];
$arr_two = ['two', 'five', 'six'];

print_r(array_intersect($arr_one, $arr_two));

/* 
Array
(
    [1] => two
) 
*/