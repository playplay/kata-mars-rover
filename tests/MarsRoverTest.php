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

    public function testItRotatesThreeTimesToTheLeft(): void
    {
        // Arrange
        $sut = new MarsRover();

        // Act
        $position = $sut->execute('LLL');

        // Assert
        $this->assertSame('0:0:E', $position);
    }

    public function testItRotatesFourTimesToTheLeft(): void
    {
        // Arrange
        $sut = new MarsRover();

        // Act
        $position = $sut->execute('LLLL');

        // Assert
        $this->assertSame('0:0:N', $position);
    }

    public function testItRotatesFiveTimesToTheLeft(): void
    {
        // Arrange
        $sut = new MarsRover();

        // Act
        $position = $sut->execute('LLLLL');

        // Assert
        $this->assertSame('0:0:W', $position);
    }

    public function testItRotatesToTheRight(): void
    {
        // Arrange
        $sut = new MarsRover();

        // Act
        $position = $sut->execute('R');

        // Assert
        $this->assertSame('0:0:E', $position);
    }

    public function testItRotatesToTheRightTwice(): void
    {
        // Arrange
        $sut = new MarsRover();

        // Act
        $position = $sut->execute('RR');

        // Assert
        $this->assertSame('0:0:S', $position);
    }

    public function testItRotatesToTheLeftAndToTheRight(): void
    {
        // Arrange
        $sut = new MarsRover();

        // Act
        $position = $sut->execute('LR');

        // Assert
        $this->assertSame('0:0:N', $position);
    }

    public function testItMovesOnePosition(): void
    {
        // Arrange
        $sut = new MarsRover();

        // Act
        $position = $sut->execute('M');

        // Assert
        $this->assertSame('0:1:N', $position);
    }

    public function testItMovesTenTimesInPosition(): void
    {
        // Arrange
        $sut = new MarsRover();

        // Act
        $position = $sut->execute('MMMMMMMMMM');

        // Assert
        $this->assertSame('0:0:N', $position);
    }
}
