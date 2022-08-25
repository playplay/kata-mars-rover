<?php

declare(strict_types=1);

namespace MarsRover;

final class MarsRover
{
    private string $x = '0';
    private string $y = '0';
    private string $d = 'N';

    public function execute(string $command): string
    {
        return "$this->x:$this->y:$this->d";
    }
}
