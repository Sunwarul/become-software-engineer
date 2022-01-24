<?php 

$str = 'Hello world';

echo strlen($str) . PHP_EOL;
echo str_word_count($str) . PHP_EOL;
echo strrev($str) . PHP_EOL;

echo strpos($str, 'world') . PHP_EOL;
echo strpos($str, 'john') . PHP_EOL;