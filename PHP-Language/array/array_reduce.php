<?php 

$numbers = [1, 2, 3, 4, 5];

$sum = array_reduce($numbers, function($sum, $item) {
	return $sum + $item;
}, 0);

echo $sum . PHP_EOL;

echo array_reduce($numbers, fn($s, $i) => $s + $i, 0) . PHP_EOL;

// $days = array_recue(range(1, 7), fn($arr, $i) => $arr[$i] = date('l', strtotime("Y-m-$i")));

echo date('l', strtotime("Y-m-1"));