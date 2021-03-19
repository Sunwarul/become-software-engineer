<?php

/**
 * @author Sunwaurl
 * PHP 7.2
 */

$str = trim(fgets(STDIN));
$arr = str_split($str);
$cond1 = 0;
$cond2 = 0;
$flag1 = $flag2 = 0;
//  ABC
// aABC
// ==> Change case, Ignore otherwise 

if (ctype_lower($arr[0])) {
    $cond1 = true;
}

if (ctype_upper($arr[0])) {
    $cond2 = true;
}


if ($cond1) {
    for ($i = 1; $i < count($arr); $i++) {
        if (ctype_upper($arr[$i])) {
            $flag1++;
        }
    }
}

if ($cond2) {
    // echo "Cond2";
    for ($i = 0; $i < count($arr); $i++) {
        if (ctype_upper($arr[$i])) {
            $flag2++;
        }
    }
}

if (ctype_lower($arr[0]) && $flag1 == strlen($str) - 1 && strlen($str) >= 1) {
    $str = strtolower($str);
    echo ucwords($str) . "\n";
} else if (ctype_upper($arr[0]) && $flag2 == strlen($str)) {
    $str = strtolower($str);
    echo $str . "\n";
} else {
    echo $str . "\n";
}
