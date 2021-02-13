<?php

require_once __DIR__ . '/Person.php';

/**
 * @var Person $person
 */
$person = new Person(36, "Sunwarul Islam");

echo $person->getAge() . " " . $person->getName();
echo PHP_EOL;
