<?php 

// First class callables 
function show(int $a, int $b) {
	return $a + $b;
}

$s = show(...);

echo $s(1, 2);