<?php

declare(strict_types=1);

namespace Tests;

use MarsRover\Rover;
use PHPUnit\Framework\TestCase;

final class RoverTest extends TestCase
{
	public function testItIsInstanciable() {
		$testedInstance = new Rover();
        $this->assertIsObject($testedInstance);
	}

    public function testItReturnsAString(): void
    {
        $rover = new Rover();
        $this->assertIsString($rover->execute('R'));
    }

    public function testItStartsFrom00AndFacingNorth(): void
    {
        $rover = new Rover();
        $this->assertSame('0:0:E', $rover->execute('R'));
    }

    public function testItCanRotateLeft(): void
    {
        $rover = new Rover();
        $this->assertSame('0:0:W', $rover->execute('L'));
    }
}
