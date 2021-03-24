<?php

$BASE = 'https://github.com/Sunwarul/become-software-engineer/blob/main/PHP/array/';
$file_stream = fopen(__DIR__.'/REFERENCE.md', 'w');

$dirs = scandir(__DIR__);
$generated_array = [];

foreach($dirs as $dir) {
    if(!in_array($dir, ['.', '..'])) {
        $generated_array[] = $BASE . $dir;
    }
}

fwrite($file_stream, '# Array Methods' . PHP_EOL);

foreach($generated_array as $link) {
    fwrite($file_stream, '💠' . $link.PHP_EOL);
}

fclose($file_stream);