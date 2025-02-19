<?php 

// addcslashes(string $str, string $characters): string

echo addcslashes('Hello world!', 'w') . PHP_EOL;
echo addcslashes('Hi there', 't') . PHP_EOL;
echo addcslashes('Hi 10', '0') . PHP_EOL;
echo addcslashes('Hi   ', ' ') . PHP_EOL;
echo addcslashes('Hi there', 'A..z') . PHP_EOL;
echo addcslashes('Hi[]`_{}', 'A..z') . PHP_EOL;
echo addcslashes('Hi there', 't') . PHP_EOL;
echo addcslashes('Hi there', 't') . PHP_EOL;
echo addcslashes('Any b\0ody here?', '-') . PHP_EOL;


echo "ASCI value of a is: " . ord('a'). ', '. ord('Z');