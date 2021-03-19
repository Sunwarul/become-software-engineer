<?php

/**
 * @author Sunwaurl
 * PHP 7.2
 */

error_reporting(0);
$std = fopen("php://stdin", "r");
fscanf($std, "%d", $n);
fscanf($std, "%s", $str);

$s_arr = str_split($str);
$s = 0;

for ($i = 0; $i < count($s_arr); $i++) {
	if ($s_arr[$i] == $s_arr[$i + 1]) {
		$s = $s + 1;
	}
}

echo $s . "\n";
fclose($std);
