<?php

declare(strict_types=1);

namespace Project\Tests;

use PHPUnit\Framework\TestCase;

require_once __DIR__ . '/../vendor/autoload.php';

/**
 * EqualityTest Class
 */
class EqualityTest extends TestCase
{
    /** @test */
    public function test_equality_test()
    {
        $this->assertEquals(1, 1);
    }
    
}