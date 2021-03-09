<?php

$cars = array("Volvo", "BMW", "Toyota");
echo "I like " . $cars[0] . ", " . $cars[1] . " and " . $cars[2] . ".";

/**
 * I like Volvo, BMW and Toyota.
 */

/* Definition and Usage
The array() function is used to create an array.

In PHP, there are three types of arrays:

Indexed arrays - Arrays with numeric index
Associative arrays - Arrays with named keys
Multidimensional arrays - Arrays containing one or more arrays */

/* 

array(value1, value2, value3, etc.)
array(key=>value,key=>value,key=>value,etc.)

*/


$age = array("Peter" => "35", "Ben" => "37", "Joe" => "43");
echo "Peter is " . $age['Peter'] . " years old.\n";

/* Peter is 35 years old. */


$cars = array("Volvo", "BMW", "Toyota");
$arrlength = count($cars);

for ($x = 0; $x < $arrlength; $x++) {
    echo $cars[$x];
    echo "\n";
}

/**
 * Volvo
 * BMW
 * Toyota
 */


// A two-dimensional array:
$cars = array(
    array("Volvo", 100, 96),
    array("BMW", 60, 59),
    array("Toyota", 110, 100)
);

echo $cars[0][0] . " ";
echo $cars[0][1] . " ";
echo $cars[0][2] . " ";


/**
 * Volvo 100 96
 */
