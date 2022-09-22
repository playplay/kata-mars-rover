<?php

declare(strict_types=1);

namespace MarsRover;

final class MarsRover
{
    public function execute(string $input): string
    {
        $position = '0:0';
        $direction = 'N';
        foreach (str_split($input) as $letter) {
            if ($letter === 'R' || $letter === 'L') {
                $direction = $this->switchDirection($direction, $letter);
                continue;
            }

            if ($letter === 'M') {
                $position = $this->move($direction, $position);
            }
        }

        return $position . ':' . $direction;
    }

    private function switchDirection(string $initialDirection, string $leftOrRight): string
    {
        $directions = [
            'N',
            'E',
            'S',
            'W',
        ];

        $initialPositionIndex = array_search($initialDirection, $directions);

        $newPosition = $leftOrRight === 'R'
            ? $initialPositionIndex + 1
            : $initialPositionIndex - 1;

        if ($newPosition < 0) {
            return 'W';
        }

        if ($newPosition === count($directions)) {
            return 'N';
        }

        return $directions[$newPosition];
    }

    private function move(string $direction, string $position): string
    {
        [$x, $y] = explode(':', $position);

        if ($direction === 'N') {
            $y++;
        } else if ($direction === 'S') {
            $y--;
        } else if ($direction === 'E') {
            $x++;
        } else if ($direction === 'W') {
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

        return $x . ':' . $y;
    }
}
