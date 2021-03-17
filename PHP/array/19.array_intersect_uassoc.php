<?php

/**
 * Compare the keys and values of two arrays, and return the matches (using a user-defined key comparison function)
 *
 */

function myfunction($a, $b)
{
    if ($a === $b) {
        return 0;
    }
    return ($a > $b) ? 1 : -1;
}

$a1 = array("a" => "red", "b" => "green", "c" => "blue");
$a2 = array("d" => "red", "b" => "green", "e" => "blue");

$result = array_intersect_uassoc($a1, $a2, "myfunction");
print_r($result);

// Array
// (
//     [b] => green
// )