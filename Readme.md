# MarsRover

## Instructions

[See instructions here](https://katalyst.codurance.com/simple-mars-rover)

## Getting started

Run `composer install` to get dependencies.

Alternatively, you can install dependencies using docker with `docker-compose run --rm php composer install`.

## Run tests

You can run tests with PhpUnit using `./vendor/bin/phpunit`.

If you prefer using docker you can run tests with `docker-compose run --rm php ./vendor/bin/phpunit`.

A Test Run Logger is installed and logs all test runs. At the end of the kata you
can take a moment to review the logs and see if you see strange patterns. To make it easier
to review you can write the time when you're entering or leaving a refactoring phase, or when
you're facing difficulties. If you see something weird, what could have you done differently to avoid it?

### Or go TCR

[TCR](https://medium.com/@kentbeck_7670/test-commit-revert-870bbd756864) stands for `test && commit || revert`. When tests are passing the code is automatically committed, otherwise it's reverted.
Its a good training for writing really small increments of code.

A TCR script is included in this repo and you can use with `./tcr`.
The script is a relaxed [variant](https://medium.com/@tdeniffel/tcr-variants-test-commit-revert-bf6bd84b17d3) of TCR, the tests aren't reverted.


