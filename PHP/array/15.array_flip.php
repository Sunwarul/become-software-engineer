<?php

/**
 * Flip array keys with values
 */

$a1 = array("a" => "red", "b" => "green", "c" => "blue", "d" => "yellow");
$result = array_flip($a1);
print_r($result);


// Array
// (
//     [red] => a
//     [green] => b
//     [blue] => c
//     [yellow] => d
// )