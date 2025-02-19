<?php

function str_random()
{
    $alphabet = range('a', 'z');
    $str = '';
    $counter = count($alphabet);
    while ($counter--) {
        $str .= $alphabet[mt_rand(0, $counter)];
    }
    return $str;
}

$sized_array = new SplFixedArray(5);

for ($i = 0; $i < count($sized_array); $i++) {
    $sized_array[$i] = str_random();
}
print_r($sized_array);


/* SplFixedArray Object
(
    [0] => kugbaigfnqdehedaghebebabaa
    [1] => pqwiijkjcmalhkckgdeddaabaa
    [2] => bbatgkddoceclmhihafbeaabba
    [3] => zmcamhjcadmmlmckficaebacaa
    [4] => znhtbhgkeppcfjljigeffecaaa
) */