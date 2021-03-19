<?php

/**
 * @author Sunwaurl
 * PHP 7.2
 */

$stdin = fopen("php://stdin", "r");
fscanf($stdin, "%[^\n]", $arr);
$arr = array_map('intval', preg_split("/\+/", $arr, -1, PREG_SPLIT_NO_EMPTY));
function sort_array($array)
{
    sort($array);
    return $array;
}
$res = sort_array($arr);
$ans = implode("+", $res);
echo $ans . "\n";
