<?php

declare(strict_types=1);

namespace MarsRover;

use PHPUnit\Framework\TestCase;

class SampleTest extends TestCase
{
    private MarsRover $sut;

    public function setUp(): void
    {
        $this->sut = new MarsRover();
    }

    public function testItEndsAt00NWhenEmptyInput(): void
    {
        $input = '';

        $position = $this->sut->execute($input);

        $this->assertSame('0:0:N', $position);
    }

    /**
     * @dataProvider switchDirectionDataProvider
     */
    public function testItTurnsTwoTimesLeftWhenLLInput(string $input, string $expectedOutput): void
    {
        $position = $this->sut->execute($input);

        $this->assertSame($expectedOutput, $position);
    }

    public function testItMovesUpWhenDirectionIsNorth(): void
    {
        $input = 'M';

        $position = $this->sut->execute($input);

        $this->assertSame('0:1:N', $position);
    }

    private function switchDirectionDataProvider(): array
    {
        return [
            ['R', '0:0:E'],
            ['L', '0:0:W'],
            ['LL', '0:0:S'],
            ['LLL', '0:0:E'],
            ['RRRR', '0:0:N'],
            ['RLL', '0:0:W'],
        ];
    }
}
