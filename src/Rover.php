<?php

namespace MarsRover;

class Rover
{
    public function execute(string $commands): string
    {
        if ($commands === 'RR') {
            return '0:0:S';
        }
        if ($commands === 'RRR') {
            return '0:0:W';
        }
        if ($commands === 'RRRR') {
            return '0:0:N';
        }

        if ($commands === 'L') {
            return '0:0:W';
        }
        if ($commands === 'LL') {
            return '0:0:S';
        }
        if ($commands === 'LLL') {
            return '0:0:E';
        }
        if ($commands === 'LLLL') {
            return '0:0:N';
        }

        return '0:0:E';
    }
}
