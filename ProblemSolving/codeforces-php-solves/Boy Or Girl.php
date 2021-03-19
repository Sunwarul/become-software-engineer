<?php

/**
 * @author Sunwaurl
 * PHP 7.2
 */

error_reporting(0);
$std = fopen("php://stdin", "r");
fscanf($std, "%s", $str);
$n = count(array_unique(str_split($str)));
if ($n % 2 == 0) {
    echo "CHAT WITH HER!\n";
} else {
    echo "IGNORE HIM!\n";
}
fclose($std);
