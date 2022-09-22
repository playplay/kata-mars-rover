<?php

declare(strict_types=1);

namespace MarsRover;

final class DirectionHandler
{
    public function switchDirection(string $initialDirection, string $leftOrRight): string
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
}
