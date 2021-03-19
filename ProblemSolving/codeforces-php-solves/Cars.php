<?php

/**
 * @author Sunwaurl
 * PHP 7.2
 */

error_reporting(0);
$temp = $total = 0;
$count1 = $count2 = $count3 = 0;

$n = (int) fgets(STDIN);
$g = [];
$g = array_map('intval', explode(' ', fgets(STDIN)));

for ($i = 0; $i < $n; $i++) {
    if ($n == 1) {
        $total++;
        break;
    }

    if ($g[$i] == 1) $count1++;
    else if ($g[$i] == 2) $count2++;
    else if ($g[$i] == 3) {
        $count3++;
        $total++;
    } else {
        $total++;
    }
}
$count2 = $count2 * 2;
$total += $count2 / 4;
$left = $count2 % 4;
if ($count3 >= $count1) {
    $count1 = 0;
} else {
    $count1 = $count1 - $count3;
}

$temp = $left + $count1;

while ($temp > 0) {
    $total++;
    $temp = $temp - 4;
}
echo (int) $total . "\n";
