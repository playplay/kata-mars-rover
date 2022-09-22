<?php

namespace MarsRover;

use PHPUnit\Framework\TestCase;

final class MarsRoverTest extends TestCase
{
    public function testItStartsInTheInitialPositionOfTheTable(): void
    {
        // Arrange
        $sut = new MarsRover();

        // Act
        $position = $sut->execute();

        // Assert
        $this->assertSame('0:0:N', $position);
    }

    public function testItRotatesToTheLeft(): void
    {
        // Arrange
        $sut = new MarsRover();

        // Act
        $position = $sut->execute('L');

        // Assert
        $this->assertSame('0:0:W', $position);
    }

    public function testItRotatesTwiceToTheLeft(): void
    {
        // Arrange
        $sut = new MarsRover();

        // Act
        $position = $sut->execute('LL');

        // Assert
        $this->assertSame('0:0:S', $position);
    }
}
