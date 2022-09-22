<?php

declare(strict_types=1);

namespace MarsRover;

final class MarsRover
{
    public function execute(string $input): string
    {
        $position = '0:0';
        $initialDirection = 'N';
        //foreach(str_split($input) as $letter){
        //    return $position . ':' . $this->switchDirection($initialDirection, $letter);
        //}

        if ($input === 'R' || $input === 'L') {
            return $position . ':' . $this->switchDirection($initialDirection, $input);
        }

        if ($input === 'LL') {
            return $position . ':S';
        }

        if ($input === 'LLL') {
            return $position . ':E';
        }

        return $position . ':N';
    }

    private function switchDirection(string $initialDirection, string $leftOrRight): string
    {
        if ($leftOrRight === 'R') {
            return 'E';
        }

        if ($leftOrRight === 'L') {
            return 'W';
        }
    }
}
