<?php

declare(strict_types=1);

namespace MarsRover;

final class MarsRover
{
    public function execute(string $command): string
    {
        $x = 0;
        $y = 0;
        $d = 'N';

        $commands = str_split($command);
        foreach ($commands as $movement) {
            if ($movement === 'L' || $movement === 'R') {
                $d = $this->rotate($d, $movement);
            }
            if ($movement === 'M') {
                $y++;
            }

            $y = $y % 10;
        }


        return "{$x}:{$y}:{$d}";
    }

    private function rotate(string $direction, string $movement): string
    {
        if ($movement === 'L') {
            $direction = 'W';
        }

        if ($movement === 'R') {
            $direction = 'E';
        }

        return $direction;
    }
}
