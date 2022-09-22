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

    public function testItTurnsRightWhenRInput(): void
    {
        $input = 'R';

        $position = $this->sut->execute($input);

        $this->assertSame('0:0:E', $position);
    }

    public function testItTurnsLeftWhenLInput(): void
    {
        $input = 'L';

        $position = $this->sut->execute($input);

        $this->assertSame('0:0:W', $position);
    }

    public function testItTurnsTwoTimesLeftWhenLLInput(): void
    {
        $input = 'LL';

        $position = $this->sut->execute($input);

        $this->assertSame('0:0:S', $position);
    }
}
