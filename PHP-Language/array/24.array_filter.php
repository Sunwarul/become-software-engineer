<?php 


$arr = [1, 2, 3, 4, 5, 6, 7, 8];

$filterdArray = array_filter(fn($item) => $item % 2 == 0);


print_r($filterdArray);