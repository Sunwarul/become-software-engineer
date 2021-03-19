<?php

/**
 * @author Sunwaurl
 * PHP 7.2
 */

error_reporting(0);
$arr = [];
$testCase = (int) fgets(STDIN);

while ($testCase--) {
    list($n1, $n2) = explode(' ', fgets(STDIN));
    $current = $current - $n1;
    $current = $current + $n2;
    $arr[] = $current;
}
echo max($arr) . "\n";
