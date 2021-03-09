<?php
$fname = array("Peter", "Ben", "Joe");
$age = array("35", "37", "43");

$c = array_combine($fname, $age);
print_r($c);



/*
array_combine(keys, values)

Array
(
    [Peter] => 35
    [Ben] => 37
    [Joe] => 43
)

*/