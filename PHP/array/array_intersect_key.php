<?php

$arr_one = ['one' => 'Mr. One', 'two' => 'Mr. Two', 'three' => 'Mr. Three 1'];
$arr_two = ['three' => 'Mr Three 2', 'four' => 'Mr. Four', 'five' => 'Mr. Five'];

// Array Intersection
print_r(array_intersect_key($arr_one, $arr_two));

/* Array
(
    [three] => Mr. Three 1
) */