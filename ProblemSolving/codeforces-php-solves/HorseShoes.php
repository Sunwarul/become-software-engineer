<?php 

$input = trim(fgets(STDIN));
$shoes = explode(" ", $input);
$required_shoes = count($shoes) - count(array_unique($shoes));
echo $required_shoes . PHP_EOL;