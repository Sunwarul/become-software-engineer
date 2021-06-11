<?php

$n = (int) fgets(STDIN);
$juice = explode(' ', trim(fgets(STDIN)));
$res = array_sum($juice) / $n;
echo $res . PHP_EOL;