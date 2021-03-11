<?php

namespace App\Interface;

require_once "vendor/autoload.php";

class Cat implements IAnimal
{
    public function makeSound(): void
    {
        echo "Making actual sound";
    }
    public function doRun(): void
    {
        echo "Running actual run here";
    }
}
