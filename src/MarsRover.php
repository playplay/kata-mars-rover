<?php

declare(strict_types=1);

namespace MarsRover;

final class MarsRover
{
    private const SEPARATOR = ':';
    private DirectionHandler $directionHandler;

    public function __construct()
    {
        $this->directionHandler = new DirectionHandler();
    }

    public function execute(string $input): string
    {
        $position = new Position(0, 0);
        $direction = 'N';
        foreach (str_split($input) as $letter) {
            if ($letter === 'R' || $letter === 'L') {
                $direction = $this->directionHandler->switchDirection($direction, $letter);
                continue;
            }

            if ($letter === 'M') {
                $position = $position->move($direction);
            }
        }

        return $this->displayOutput($position, $direction);
    }

    private function displayOutput(Position $position, string $direction): string
    {
        return $position->x . self::SEPARATOR . $position->y . self::SEPARATOR . $direction;
    }
}
