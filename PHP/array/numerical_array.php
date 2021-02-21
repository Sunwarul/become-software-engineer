<?php

$my_array = [];

$my_array[2] = 'two';
$my_array[500] = 'Five';
$my_array[5] = 'Five';
$my_array[] = 'Other';
$my_array[] = 'Other';
$my_array[] = 'Other';
$my_array[] = 'Other';

print_r($my_array);

/* 
Array
(
    [2] => two
    [500] => Five
    [5] => Five
    [501] => Other
    [502] => Other
    [503] => Other
    [504] => Other
) 
*/