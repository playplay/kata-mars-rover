<?php

declare(strict_types=1);

namespace MarsRover;

use PHPUnit\Framework\TestCase;

class MarsRoverTest extends TestCase
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
    public function testItMovesNorth(string $input, string $expectedOutput): void
    {
        $position = $this->sut->execute($input);

        $this->assertSame($expectedOutput, $position);
    }

    /**
     * @dataProvider moveSouthDataProvider
     */
    public function testItMovesSouth(string $input, string $expectedOutput): void
    {
        $position = $this->sut->execute($input);

        $this->assertSame($expectedOutput, $position);
    }

    /**
     * @dataProvider moveEastDataProvider
     */
    public function testItMovesEast(string $input, string $expectedOutput): void
    {
        $position = $this->sut->execute($input);

        $this->assertSame($expectedOutput, $position);
    }

    /**
     * @dataProvider moveWestDataProvider
     */
    public function testItMovesWest(string $input, string $expectedOutput): void
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

    private function moveSouthDataProvider(): array
    {
        return [
            ['RRM', '0:9:S'],
            ['RRMM', '0:8:S'],
            ['RRMMM', '0:7:S'],
            ['RRMMMMMMMMMM', '0:0:S'],
        ];
    }

    private function moveEastDataProvider(): array
    {
        return [
            ['RM', '1:0:E'],
            ['RMM', '2:0:E'],
            ['RMMM', '3:0:E'],
            ['RMMMMMMMMMM', '0:0:E'],
        ];
    }

    private function moveWestDataProvider(): array
    {
        return [
            ['LM', '9:0:W'],
            ['LMM', '8:0:W'],
            ['LMMM', '7:0:W'],
            ['LMMMMMMMMMM', '0:0:W'],
        ];
    }
}
