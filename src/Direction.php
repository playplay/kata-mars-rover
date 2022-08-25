<?php

declare(strict_types=1);

namespace MarsRover;

final class Direction
{
    private string $direction;

    public function __construct(string $direction = 'N')
    {
        $this->direction = $direction;
    }

    public function __toString(): string
    {
        return $this->direction;
    }
}
