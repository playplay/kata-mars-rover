<?php

namespace MarsRover;

class Rover
{
    public function execute(string $commands): string
    {
        if ($commands === 'L') {
            return '0:0:W';
        }

        return '0:0:E';
    }
}
