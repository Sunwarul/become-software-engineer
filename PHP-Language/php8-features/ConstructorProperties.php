<?php

class Person
{
    public function __construct(
        private int $age = 0,
        private string $name = 'Default Name'
    ) {
    }
}
