<?php

/**
 * @author Sunwarul Islam 
 * Problem Link: https://codeforces.com/problemset/problem/486/A?f0a28=1
 */

$n = trim(fgets(STDIN));
$lastDigit = $n[strlen($n) - 1];
if ($lastDigit % 2 == 0) {
    echo sprintf("%.0f", ($n / 2));
}
if ($lastDigit % 2 != 0) {
    echo sprintf("%.0f", (- ($n + 1) / 2));
}

echo "\n";
