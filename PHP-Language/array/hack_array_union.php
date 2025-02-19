<?php

$arr_one = ['one' => 'Mr. One', 'two' => 'Mr. Two', 'three' => 'Mr. Three 1'];
$arr_two = ['three' => 'Mr Three 2', 'four' => 'Mr. Four', 'five' => 'Mr. Five'];

// Array Union
print_r($arr_one + $arr_two);

/* Array
(
    [one] => Mr. One
    [two] => Mr. Two
    [three] => Mr. Three 1
    [four] => Mr. Four
    [five] => Mr. Five
) */