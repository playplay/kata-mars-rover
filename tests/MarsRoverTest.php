<?php

namespace MarsRover;

use PHPUnit\Framework\TestCase;

class MarsRoverTest extends TestCase
{
    public function testItExecutesSomething(): void
    {
        // Arrange
        $marsRover = new MarsRover();
        $command = '';

        // Act
        $commandResult = $marsRover->execute($command);

        // Assert
        $this->assertEquals('0:0:N', $commandResult);
    }
}
