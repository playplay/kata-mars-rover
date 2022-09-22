<?php

declare(strict_types=1);

namespace Tests;

use MarsRover\MarsRover;
use PHPUnit\Framework\TestCase;

final class MarsRoverTest extends TestCase
{
    private MarsRover $sut;

    protected function setUp(): void
    {
        parent::setUp();

        $this->sut = new MarsRover();
    }

    public function testConstruct(): void
    {
        $this->assertInstanceOf(MarsRover::class, $this->sut);
    }

    public function testItReturnsInitialPositionWithNoMoves(): void
    {
        $position = $this->sut->execute('');

        $this->assertSame('0:0:N', $position);
    }

    /**
     * @dataProvider forwardCommandDataProvider
     */
    public function testItMovesForward(string $command, string $expectedPosition): void
    {
        $position = $this->sut->execute($command);

        $this->assertSame($expectedPosition, $position);
    }

    private function forwardCommandDataProvider(): \Generator
    {
        yield 'one step' => [
            'command' => 'M',
            'expectedPositio ' => '0:1:N'
        ];

        yield 'two step' => [
            'command' => 'MM',
            'expectedPositio ' => '0:2:N'
        ];

        yield 'nine step' => [
            'command' => 'MMMMMMMMM',
            'expectedPositio ' => '0:9:N'
        ];

        yield 'loop on max grid' => [
            'command' => 'MMMMMMMMMM',
            'expectedPositio ' => '0:0:N'
        ];
    }

    public function testItRotatesOnceLeft(): void
    {
        $position = $this->sut->execute('L');

        $this->assertSame('0:0:W', $position);
    }

    public function testItRotatesRight(): void
    {
        $position = $this->sut->execute('R');

        $this->assertSame('0:0:E', $position);
    }

    public function testItRotatesTwiceLeft(): void
    {
        $position = $this->sut->execute('LL');

        $this->assertSame('0:0:S', $position);
    }
}
