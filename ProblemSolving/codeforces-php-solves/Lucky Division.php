<?php

/**
 * @author Sunwaurl
 * PHP 7.2
 */

error_reporting(0);
$n = (int) fgets(STDIN);
$arr = [4, 7, 47, 74, 44, 444, 447, 474, 477, 777, 774, 744];
$flag = false;
for ($i = 0; $i < count($arr); $i++) {
    if ($n % $arr[$i] == 0) {
        $flag = true;
    }
}
if ($flag) {
    echo "YES\n";
} else {
    echo "NO\n";
}
