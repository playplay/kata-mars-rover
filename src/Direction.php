<?php

declare(strict_types=1);

namespace MarsRover;

final class Direction
{
    public readonly string $value;

    public function __construct(string $direction)
    {
        $this->value = $direction;
    }
}
