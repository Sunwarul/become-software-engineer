<?php

/**
 * @author Sunwaurl
 * PHP 7.2
 */

$stdin = fopen("php://stdin", "r");
fscanf($stdin, "%d %d %d", $n, $m, $a);

$x = $n / $a;
$x = intval($x);
if ($n % $a) {
    ++$x;
}
$y = $m / $a;
$y = intval($y);
if ($m % $a) {
    ++$y;
}
$res = bcmul($x, $y);
echo $res . "\n";
