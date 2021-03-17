<?php

$arr = ['john' => 10, 'lenin' => 13, 'micheal' => 20];
print_r(array_change_key_case($arr, CASE_UPPER));

/* 
    Array
    (
        [JOHN] => 10
        [LENIN] => 13
        [MICHEAL] => 20
    )
*/