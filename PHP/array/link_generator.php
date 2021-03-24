<?php

$BASE = 'https://github.com/Sunwarul/become-software-engineer/blob/main/PHP/array/';
$file_stream = fopen(__DIR__.'/README.md', 'w');

$dirs = scandir(__DIR__);
$generated_array = [];

foreach($dirs as $dir) {
    if(!in_array($dir, ['.', '..', 'README.md', 'link_generator.php', 'Array.md', 'REFERENCE.md','links.txt'])) {
        $generated_array[] = $dir;
    }
}

fwrite($file_stream, '# Array Methods' . PHP_EOL);

foreach($generated_array as $key => $link) {
   fwrite($file_stream, "[{$link}]({$BASE}.{$link})". '<br>');
}

fclose($file_stream);