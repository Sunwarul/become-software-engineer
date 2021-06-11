<?php

$str = trim(fgets(STDIN));
$temp = str_replace('WUB', ' ', $str);
echo trim(str_replace('  ', ' ', $temp));