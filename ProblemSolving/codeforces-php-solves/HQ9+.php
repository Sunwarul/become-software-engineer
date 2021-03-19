<?php

/**
 * @author Sunwaurl
 * PHP 7.2
 */

$str = trim(fgets(STDIN));

$arr = array_unique(str_split($str));
if (in_array("H", $arr) || in_array("Q", $arr) || in_array("9", $arr)) {
    echo "YES\n";
} else {
    echo "NO\n";
}
