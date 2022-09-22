<?php

declare(strict_types=1);

namespace MarsRover;

final class MarsRover
{
    public function execute(string $input): string
    {
        $position = '0:0';
        $direction = 'N';
        foreach(str_split($input) as $letter){
            $direction = $this->switchDirection($direction, $letter);
        }

        return $position . ':' . $direction;
    }

    private function switchDirection(string $initialDirection, string $leftOrRight): string
    {
        $directions = [
          'N', 'E', 'S', 'W',
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
