<?php

/**
 * @author Sunwaurl
 * PHP 7.2
 */

list($n, $t) = explode(' ', fgets(STDIN));
$str         = trim(fgets(STDIN));
$arr         = str_split($str);
$t           = intval($t);

while ($t--) {
    for ($i = 1; $i < count($arr); ++$i) {
        if ($arr[$i] == 'G' && $arr[$i - 1] == 'B') {
            $arr[$i]     = 'B';
            $arr[$i - 1] = 'G';
            ++$i;
        }
    }
}

$res = implode('', $arr);
echo $res . "\n";
