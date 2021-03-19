<?php

/**
 * @author Sunwaurl
 * PHP 7.2
 */

$n = fgets(STDIN);
$count = 0;
$n = bcadd($n, "0");
while ($n != 0) {
	if ($n % 10 == 4 || $n % 10 == 7) {
		$count += 1;
	}
	$n /= 10;
}
if ($count === 4 || $count === 7) {
	echo "YES";
} else if (!($count === 4 || $count === 7)) {
	echo "NO";
}
