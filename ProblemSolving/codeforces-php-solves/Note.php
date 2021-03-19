<?php

/**
 * @author Sunwaurl
 * PHP 7.2
 */

error_reporting(0);
$stdin = fopen("php://stdin", "r");
$arr = array();
$res = 0;

for ($i = 0; $i <= 4; $i++) {
    fscanf($stdin, "%[^\n]", $arr_temp);
    $arr[] = array_map('intval', preg_split('/ /', $arr_temp, -1, PREG_SPLIT_NO_EMPTY));
}

for ($i = 0; $i <= 4; $i++) {
    for ($j = 0; $j <= 4; $j++) {
        if ($i == 0 && $j == 0) {
            if ($arr[$i][$j] == 1) {
                $res = 4;
            } else {
                $res = 0;
            }
        } else if ($arr[$i][$j] == 1) {
            $res = abs($i - 2) + abs($j - 2);
        }
    }
}
echo $res . "\n";
fclose($stdin);
