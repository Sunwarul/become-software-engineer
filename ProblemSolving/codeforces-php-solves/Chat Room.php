<?php

/**
 * @author Sunwaurl
 * PHP 7.2
 */

error_reporting(0);
fscanf(STDIN, "%s", $type);
$base = "hello";
$count = 0;
$a = 0;
for ($i = 0; $i < strlen($type); $i++) {
    if ($type[$i] == $base[$a]) {
        $a++;
        $count++;
    }
}
if ($count == 5) {
    echo "YES\n";
} else {
    echo "NO\n";
}
