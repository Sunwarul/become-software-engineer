<?php

/**
 * @author Sunwaurl
 * PHP 7.2
 */

list($k, $n, $w) = explode(' ', fgets(STDIN));
$total = 0;
for ($i = 1; $i <= $w; $i++) {
    $total += $k * $i;
}

if ($n > $total) {
    echo "0\n";
} else {
    echo $total - $n . "\n";
}
