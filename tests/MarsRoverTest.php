<?php

namespace MarsRover;

use PHPUnit\Framework\TestCase;

final class MarsRoverTest extends TestCase
{
    public function testItStartsInTheInitialPositionOfTheTable(): void
    {
        // Arrange

        // Act
        $position = $this->sut->execute();

        // Assert
        $this->assertSame('0:0:N',$position);
    }
}
