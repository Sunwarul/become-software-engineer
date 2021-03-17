<?php

// An array that represents a possible record set returned from a database
$a = array(
    array(
        'id' => 5698,
        'first_name' => 'Peter',
        'last_name' => 'Griffin',
    ),
    array(
        'id' => 4767,
        'first_name' => 'Ben',
        'last_name' => 'Smith',
    ),
    array(
        'id' => 3809,
        'first_name' => 'Joe',
        'last_name' => 'Doe',
    )
);

$last_names = array_column($a, 'last_name');
print_r($last_names);

/*

Array
(
    [0] => Griffin
    [1] => Smith
    [2] => Doe
)

*/

// 'Indexed by' another column `id`
$last_names = array_column($a, 'last_name', 'id');
print_r($last_names);

/*

Array
(
    [5698] => Griffin
    [4767] => Smith
    [3809] => Doe
)

*/
