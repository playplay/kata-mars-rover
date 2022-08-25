<?php

declare(strict_types=1);

namespace Test\MarsRover;

use MarsRover\Direction;
use PHPUnit\Framework\TestCase;

class DirectionTest extends TestCase
{
    public function testItReturnsInitialDirection(): void
    {
        $direction = new Direction();

        $this->assertSame('N', (string) $direction);
    }

    public function testItRotateLeft(): void
    {

    }
}
