<?php

/**
 * Conversion between SplFixedArray & Array
 * $spl_array = new SplFixedArray(100);
 * $spl_array = SplFixedArray::fromArray($regular_array, true|false);
 * $regular_array = $spl_array->toArray(); 
 * SplFixedArray::fromArray($array, save_indexes_or_not = true);
 * SplFixedArray_Instance->setSize(NEW_SIZE);
 */

$spl_array = new SplFixedArray(3);
$spl_array[0] = 'One';
$spl_array[1] = 'Two';
$spl_array[2] = 'Three';
print_r($spl_array);

/* SplFixedArray Object
(
    [0] => One
    [1] => Two
    [2] => Three
) */

$regular_array = $spl_array->toArray();
print_r($regular_array);

/* SplFixedArray Object
(
    [0] => One
    [1] => Two
    [2] => Three
) */

$spl_array_from_regular_array = SplFixedArray::fromArray($regular_array);
print_r($spl_array_from_regular_array);

/* SplFixedArray Object
(
    [0] => One
    [1] => Two
    [2] => Three
) */

$nullish_array = [1 => 'two', 2 => 'three', 3 => 'four'];

print_r(SplFixedArray::fromArray($nullish_array));
/* SplFixedArray Object
(
    [0] => 
    [1] => two
    [2] => three
    [3] => four
) */

print_r(SplFixedArray::fromArray($nullish_array, false));
// SplFixedArray Object
// (
//     [0] => two
//     [1] => three
//     [2] => four
// )