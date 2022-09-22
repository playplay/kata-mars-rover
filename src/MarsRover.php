<?php

declare(strict_types=1);

namespace MarsRover;

class MarsRover
{
    public function execute(string $command = ''): string
    {
        if ($command === '') {
            return "0:0:N";
        } elseif ($command === 'L'){
            return "0:0:W";
        } else {
            return "0:0:S";
        }
    }

}
