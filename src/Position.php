<?php

declare(strict_types=1);

namespace MarsRover;

final class Position
{
    public readonly int $x;
    public readonly int $y;

    public function __construct(int $x, int $y)
    {
        $this->x = $x;
        $this->y = $y;
    }

    public function move(string $direction): Position
    {
        $x = $this->x;
        $y = $this->y;

        if ($direction === 'N') {
            $y++;
        } elseif ($direction === 'S') {
            $y--;
        } elseif ($direction === 'E') {
            $x++;
        } elseif ($direction === 'W') {
            $x--;
        }

        if ($y === 10) {
            $y = 0;
        }

        if ($y === -1) {
            $y = 9;
        }

        if ($x === 10) {
            $x = 0;
        }

        if ($x === -1) {
            $x = 9;
        }

        return new self($x, $y);
    }
}
