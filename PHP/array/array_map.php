<?php

$arr = [1, 2, 3, 4];
// Used new php arrow function 
$result = array_map(fn ($item) => $item * $item, $arr);
print_r($result);
