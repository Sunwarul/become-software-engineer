<?php

/**
 * @author Sunwaurl
 * PHP 7.2
 */

$stdin = fopen("php://stdin", "r");
fscanf($stdin, "%d %d", $n, $k);
fscanf($stdin, "%[^\n]", $arr);
$arr = array_map('intval', preg_split("/ /", $arr, -1, PREG_SPLIT_NO_EMPTY));

$royal_p = $arr[$k - 1];

$sum = 0;
for ($i = 0; $i < $n; $i++) {
    if ($arr[$i] >= $royal_p) {
        $sum += 1;
    }
}

echo $sum . "\n";
