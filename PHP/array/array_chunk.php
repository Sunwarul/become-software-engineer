<?php

$cars = array("Volvo", "BMW", "Toyota", "Honda", "Mercedes", "Opel");
print_r(array_chunk($cars, 2));

/*

array_chunk(array, size, preserve) function returns a multi-dimensional array. 

Array
(
    [0] => Array
        (
            [0] => Volvo
            [1] => BMW
        )

    [1] => Array
        (
            [0] => Toyota
            [1] => Honda
        )

    [2] => Array
        (
            [0] => Mercedes
            [1] => Opel
        )

)
*/



/*

print_r(array_chunk($cars, 6));

(
    [0] => Array
        (
            [0] => Volvo
            [1] => BMW
            [2] => Toyota
            [3] => Honda
            [4] => Mercedes
            [5] => Opel
        )

)

*/
