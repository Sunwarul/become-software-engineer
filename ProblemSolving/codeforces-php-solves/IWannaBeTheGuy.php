<?php

$n = (int) fgets(STDIN);
$required = range(1, $n);

$p = explode(' ', trim(fgets(STDIN)));
unset($p[0]);

$q = explode(' ', trim(fgets(STDIN)));
unset($q[0]);

$all = array_unique(array_merge($p, $q));

$res = count(array_diff($required, $all));
echo $res === 0 ? 'I become the guy.' : 'Oh, my keyboard!';