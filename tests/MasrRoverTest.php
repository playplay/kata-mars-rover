<?php

declare(strict_types=1);

namespace MarsRover;

use PHPUnit\Framework\TestCase;

class MasrRoverTest extends TestCase
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
    public function testItSwitchesDirection(string $input, string $expectedOutput): void
    {
        $position = $this->sut->execute($input);

        $this->assertSame($expectedOutput, $position);
    }

    /**
     * @dataProvider moveNorthDataProvider
     */
    public function testItMoves(string $input, string $expectedOutput): void
    {
        $position = $this->sut->execute($input);

        $this->assertSame($expectedOutput, $position);
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

    private function moveNorthDataProvider(): array
    {
        return [
            ['M', '0:1:N'],
            ['MM', '0:2:N'],
            ['MMM', '0:3:N'],
            ['MMMMMMMMMM', '0:0:N'],
        ];
    }
    private function moveEastDataProvider(): array
    {
        return [
            ['RM', '1:0:N'],
            ['RMM', '2:0:N'],
            ['RMMM', '3:0:N'],
            ['RMMMMMMMMMM', '0:0:N'],
        ];
    }
}
