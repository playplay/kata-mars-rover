<?php

declare(strict_types=1);

namespace MarsRover;

class MarsRover
{
    public function execute(?string $command): string
    {
        if ($command === null) {
            return "0:0:N";
        } else {
            return "0:0:W";
        }
    }

}
