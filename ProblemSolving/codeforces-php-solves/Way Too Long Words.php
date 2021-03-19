<?php

/**
 * @author Sunwaurl
 * PHP 7.2
 */

$stdin = fopen("php://stdin", "r");
fscanf($stdin, "%d", $n);
for ($i = 0; $i < $n; $i++) {
    fscanf($stdin, "%s", $s);
    if (strlen($s) > 10) {
        echo $s[0] . (strlen($s) - 2) . $s[strlen($s) - 1] . "\n";
    } else {
        echo $s . "\n";
    }
}
