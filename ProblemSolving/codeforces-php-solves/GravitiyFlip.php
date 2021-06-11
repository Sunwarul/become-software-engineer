<?php

$n = (int) trim(fgets(STDIN));
$arr = explode(' ', trim(fgets(STDIN)));
sort($arr);
echo implode(' ', $arr);
