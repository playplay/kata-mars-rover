<?php

declare(strict_types=1);

namespace Tests;

use MarsRover\Rover;
use PHPUnit\Framework\TestCase;

final class RoverTest extends TestCase
{
    /** @dataProvider turnCommandsDataProvider */
    public function testItRotates360(string $command, string $expectedOutput): void
    {
        $rover = new Rover();
        $output = $rover->execute($command);
        $this->assertSame($expectedOutput, $output);
    }

    public function turnCommandsDataProvider(): array
    {
        return [
            ['R', '0:0:E'],
            ['RR', '0:0:S'],
            ['RRR', '0:0:W'],
            ['RRRR', '0:0:N'],
            ['L', '0:0:W'],
            ['LL', '0:0:S'],
            ['LLL', '0:0:E'],
            ['LLLL', '0:0:N'],
        ];
    }
}
