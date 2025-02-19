<?php

/**
 * Compare the values of two arrays, and return the differences
 * array_diff(array1, array2, array3, ...)
 */
$a1 = array("a" => "red", "b" => "green", "c" => "blue",        "d" => "yellow");
$a2 = array("e" => "red", "f" => "green", "g" => "blue");

$result = array_diff($a1, $a2);
print_r($result);

/*

Array
(
    [d] => yellow
)

*/


$a1 = array("a" => "red", "b" => "green", "c" => "blue", "d" => "yellow");
$a2 = array("e" => "red", "f" => "black", "g" => "purple");
$a3 = array("a" => "red", "b" => "black", "h" => "yellow");

$result = array_diff($a1, $a2, $a3);
print_r($result);


/*

Array
(
    [b] => green
    [c] => blue
)

*/