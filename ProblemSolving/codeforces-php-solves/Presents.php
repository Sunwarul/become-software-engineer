<?php

/**
 * @author Sunwaurl
 * PHP 7.2
 */

$n = (int) fgets(STDIN);
$myarr = array_map('intval', preg_split('/ /', fgets(STDIN)));
$new_arr = [];

for ($i = 0; $i < count($myarr); $i++) {
    $new_arr[$myarr[$i] - 1] = $i + 1;
}

for ($i = 0; $i < count($new_arr); $i++) {
    echo $new_arr[$i] . " ";
}
echo "\n";
