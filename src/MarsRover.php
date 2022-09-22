<?php

declare(strict_types=1);

namespace MarsRover;

class MarsRover
{
    private const DIRECTIONS = [ 'N', 'W', 'S', 'E' ];

    public function execute(string $command = ''): string
    {
        $numberOfL = strlen($command);

        $direction = self::DIRECTIONS[$numberOfL % 4];

        return "0:0:$direction";
    }
}
