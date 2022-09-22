<?php

declare(strict_types=1);

namespace Tests;

use MarsRover\Rover;
use PHPUnit\Framework\TestCase;

final class RoverTest extends TestCase
{
    private Rover $sut;

    public function testItConstructs(): void
    {
        $this->sut = new Rover();

        $this->assertInstanceOf(Rover::class, $this->sut);
    }



}
