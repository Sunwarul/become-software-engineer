<?php

/**
 * @author Sunwaurl
 * PHP 7.2
 */

$arr = [];
$counter = 0;
$sum = 0;
$n = (int) fgets(STDIN);
$arr = array_map('intval', explode(' ', fgets(STDIN)));


for ($i = 0; $i < count($arr); $i++) {
    $sum += $arr[$i];
}

$sum = $sum / 2;
sort($arr);
$sum2 = 0;
for ($i = $n - 1; $i >= 0; $i--) {
    $sum2 += $arr[$i];
    ++$counter;
    if ($sum2 > $sum) {
        break;
    }
}

echo $counter . "\n";
