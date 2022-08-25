<?php

declare(strict_types=1);

namespace Test\MarsRover;

use MarsRover\MarsRover;
use PHPUnit\Framework\TestCase;

class MarsRoverTest extends TestCase
{

	public function testItReturnsAString() {
		$position = (new MarsRover())->execute('');

        $this->assertIsString($position);
	}

    public function testInitialPosition()
    {
        $position = (new MarsRover())->execute('');

        $this->assertSame('0:0:N', $position);
    }

    public function testItMovesOneBoxForward()
    {
        $position = (new MarsRover())->execute('M');

        $this->assertSame('0:1:N', $position);
    }
}
