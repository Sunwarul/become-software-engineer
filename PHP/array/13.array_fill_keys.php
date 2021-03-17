<?php

/**
 * Fill an array with values, specifying keys
 */

$keys = ['one', 'two', 'three'];
print_r(array_fill_keys($keys, 'Default value'));


// Array
// (
//     [one] => Default value
//     [two] => Default value
//     [three] => Default value
// )