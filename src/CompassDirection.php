<?php

declare(strict_types=1);

namespace MarsRover;

enum CompassDirection:string
{
    case NORTH = 'N';
    case EAST = 'E';
    case SOUTH = 'S';
    case WEST = 'W';
}

enum RoverDirection:string
{
    case LEFT = 'L';
    case RIGHT = 'R';
}
