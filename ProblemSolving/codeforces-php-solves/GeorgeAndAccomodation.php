<?php

/**
 * @author Sunwaurl
 * PHP 7.2
 */

$n = (int) fgets(STDIN);
$room_remain = 0;
while ($n--) {
    list($border, $capacity) = explode(' ', trim(fgets(STDIN)));
    if ($capacity - $border >= 2) {
        $room_remain++;
    }
}
echo $room_remain . "\n";
