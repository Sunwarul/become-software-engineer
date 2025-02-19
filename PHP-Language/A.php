<?php 

$in = fgets(STDIN);
$n = intval($in);

for ($i = 0; $i < $n; $i++) {
	$x = intval(fgets(STDIN));



	$arr = range(1, $x);

	print_r($arr);



}
