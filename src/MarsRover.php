<?php

declare(strict_types=1);

namespace MarsRover;

class MarsRover
{
    private const DIRECTIONS = [ 'N', 'W', 'S', 'E' ];

    private int $actualDirection = 0;

    public function execute(string $command = ''): string
    {
        $commandDirections = str_split($command);

        foreach ($commandDirections as $direction) {
            if ($direction === 'L') {
                $this->actualDirection++;
            } else {
                $this->actualDirection--;
            }
        }

        $direction = self::DIRECTIONS[$this->actualDirection % 4];

        return "0:0:$direction";
    }
}
