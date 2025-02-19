<?php

/**
 * array_key_exists('key_to_check', $array)
 */

$array = ['name' => 'John', 'age' => 24];

if(array_key_exists('name', $array)) {
    echo "'Name' exists" . PHP_EOL;
} 
if(array_key_exists('age', $array)) {
    echo "'Age' exists." . PHP_EOL;
}

// 'Name' exists
// 'Age' exists.