<?php

declare(strict_types=1);

namespace Project\Tests;

require_once __DIR__ . '/../vendor/autoload.php';

use Project\Core\Calculator;
use PHPUnit\Framework\TestCase;

class CalculatorTest extends TestCase
{
    /** @test */
    public function test_addition_method_do_correct_sum()
    {
        $calculator = new Calculator();
        $actual = $calculator->add(1, 2, 3);

        $this->assertEquals(6, $actual);
    }
}
