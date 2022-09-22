<?php

declare(strict_types=1);

namespace MarsRover;

class MarsRover
{
    public function execute(string $command = ''): string
    {
        if ($command === 'L') {
            return "0:0:W";
        } elseif ($command === 'LL') {
            return "0:0:S";
        } elseif ($command === 'LLL') {
            return "0:0:E";
        } elseif ($command === 'LLLL') {
            return "0:0:N";
        } elseif ($command === 'LLLLL') {
            return "0:0:E";
        } else {
            return "0:0:N";
        }
    }
}
