<?php

namespace Project\Core;

/**
 * Calculator class
 */
class Calculator
{
    /**
     * add method
     *
     * @param array ...$arg
     * @return float sum of all given values
     */
    public function add(...$arg): float
    {
        return array_reduce($arg, fn($arr, $i) => $arr += $i, 0);
    }

    /**
     * Subtract two values
     *
     * @param float $a
     * @param float $b
     * @return float subtracted value
     */
    public function subtract(float $a, float $b): float
    {
        return abs($a - $b);
    }
}

echo (new Calculator)->add(1, 2.9, 3, 50) . PHP_EOL;
echo (new Calculator)->subtract(30.3, 12) . PHP_EOL;