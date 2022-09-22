<?php

declare(strict_types=1);

namespace MarsRover;

final class DirectionHandler
{
    public function switchDirection(Direction $direction, string $leftOrRight): Direction
    {
        $directions = [
            'N',
            'E',
            'S',
            'W',
        ];

        $initialPositionIndex = array_search($direction->value, $directions);

        $newPosition = $leftOrRight === 'R'
            ? $initialPositionIndex + 1
            : $initialPositionIndex - 1;

        if ($newPosition < 0) {
            return new Direction('W');
        }

        if ($newPosition === count($directions)) {
            return new Direction('N');
        }

        return new Direction($directions[$newPosition]);
    }
}
