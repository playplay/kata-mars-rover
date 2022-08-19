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
