<?php

/**
 * @author Sunwaurl
 * PHP 7.2
 */

$str = trim(fgets(STDIN));
$rev_str = trim(fgets(STDIN));

if ($rev_str == strrev($str)) {
  echo "YES\n";
} else {
  echo "NO\n";
}
