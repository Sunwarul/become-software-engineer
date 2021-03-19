<?php

/**
 * @author Sunwaurl
 * PHP 7.2
 */

error_reporting(0);
$sum = $asum = $bsum = $csum = 0;
$n = (int) fgets(STDIN);
while ($n--) {
    list($a, $b, $c) = explode(' ', fgets(STDIN));
    $asum += (int) $a;
    $bsum += (int) $b;
    $csum += (int) $c;
}
if ($asum == 0 && $bsum == 0 && $csum == 0) {
    echo "YES\n";
} else {
    echo "NO\n";
}
