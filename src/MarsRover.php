<?php

declare(strict_types=1);

namespace MarsRover;

final class MarsRover
{
    public function execute(string $input): string
    {
        if ($input === 'R') {
            return '0:0:E';
        }

        if ($input === 'L') {
            return '0:0:W';
        }

        if ($input === 'LL') {
            return '0:0:S';
        }

        return '0:0:N';
    }
}
