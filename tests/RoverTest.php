<?php

declare(strict_types=1);

namespace Test\MarsRover;

use MarsRover\Rover;
use PHPUnit\Framework\TestCase;

final class RoverTest extends TestCase
{
    public function testItReturnsInitialPosition(): void
    {
        $rover = new Rover();
        $this->assertSame('0:0:N', (string) $rover);
    }

    public function testItMovesTheRoverForward(): void
    {
        $rover = new Rover();
        $rover->move();
        $this->assertSame('0:1:N', (string) $rover);
    }

    public function testItMovesTheRoverForwardTwice(): void
    {
        $rover = new Rover();
        $rover->move();
        $rover->move();
        $this->assertSame('0:2:N', (string) $rover);
    }

    public function testItTurnsLeft(): void
    {
        $rover = new Rover();
        $rover->left();
        $this->assertSame('0:0:W', (string) $rover);
    }

    public function testItTurnsRight(): void
    {
        $rover = new Rover();
        $rover->right();
        $this->assertSame('0:0:E', (string) $rover);
    }

    public function testItTurnsRightTwice(): void
    {
        $rover = new Rover();
        $rover->right();
        $rover->right();
        $this->assertSame('0:0:S', (string) $rover);
    }

    public function testItTurnsRightThreeTimes(): void
    {
        $rover = new Rover();
        $rover->right();
        $rover->right();
        $rover->right();
        $this->assertSame('0:0:W', (string) $rover);
    }

    public function testItTurnsRightFourTimes(): void
    {
        $rover = new Rover();
        $rover->right();
        $rover->right();
        $rover->right();
        $rover->right();
        $this->assertSame('0:0:N', (string) $rover);
    }
}
