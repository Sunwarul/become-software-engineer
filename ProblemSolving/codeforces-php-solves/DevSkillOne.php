<?php

/**
 * @author Sunwaurl
 * PHP 7.2
 */

error_reporting(0);
$per_day = [];
$dev_hourse = $day_needed = 0;

while (!feof(STDIN)) {
	list($total_hourse, $developers) = explode(' ', fgets(STDIN));
	for ($i = 0; $i < $developers; $i++) {
		$per_day[$i] = (int) fgets(STDIN);
		$dev_hourse += $per_day[$i];
	}
	$day_needed = (int) ($total_hourse / $dev_hourse);
	if (($total_hourse % $dev_hourse)) {
		$day_needed++;
	}
	if ($day_needed == 1) {
		echo "Project will finish within " . $day_needed . " day.\n";
	} else {
		echo "Project will finish within " . $day_needed . " days.\n";
	}
	$dev_hourse = $total_hourse = 0;
}
