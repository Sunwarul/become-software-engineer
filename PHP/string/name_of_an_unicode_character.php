<?php

/**
 * Install the php8.0-intl extension before running this program 
 * On linux machine: sudo apt-get install php8.0-intl
 */

var_dump(IntlChar::charName("."));
var_dump(IntlChar::charName("🏩"));
var_dump(IntlChar::charName(".", IntlChar::UNICODE_CHAR_NAME));
var_dump(IntlChar::charName("\u{2603}"));
var_dump(IntlChar::charName("\u{0000}"));

echo "\u{2603}" . PHP_EOL;
