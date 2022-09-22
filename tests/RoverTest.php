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
}
