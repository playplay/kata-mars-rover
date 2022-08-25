<?php

declare(strict_types=1);

namespace MarsRover;

final class Rover
{
    /**
     * @var string
     */
    private $direction;
    /**
     * @var int
     */
    private $y;
    /**
     * @var int
     */
    private $x;

    public function __construct(int $x = 0, int $y = 0, string $direction = 'N')
    {
        $this->x = $x;
        $this->y = $y;
        $this->direction = $direction;
    }

    public function __toString(): string
    {
        return $this->x.':'.$this->y.':'.$this->direction;
    }

    public function move(): void
    {
        $this->y += 1;
    }

    public function left(): void
    {
        $this->direction = 'W';
    }

    public function right(): void
    {
        if ($this->direction === 'N') {
            $this->direction = 'E';
        }

        else if ($this->direction === 'E') {
            $this->direction = 'S';
        }

        else if ($this->direction === 'S') {
            $this->direction = 'W';
        }

        else if ($this->direction === 'W') {
            $this->direction = 'N';
        }
    }
}
