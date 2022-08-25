<?php

declare(strict_types=1);

namespace MarsRover;

use PHPUnit\Framework\TestCase;

final class CompassDirectionTest extends TestCase
{
    public function testItInitialDirection() {
        $direction = new Direction('N');

        $this->assertSame('N', $direction);
    }

    public function testItFailsWithInvalidDirection() {
        $this->expectException(new \Error());

        new Direction('Z');
    }
}
