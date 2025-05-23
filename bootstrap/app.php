<?php

use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;

return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: __DIR__.'/../routes/web.php',
        api: [
            __DIR__ . '/../routes/api/fizzbuzz.php',
            __DIR__ . '/../routes/api/is_power_of.php',
            __DIR__ . '/../routes/api/convert_to_roman.php',
            __DIR__ . '/../routes/api/is_prime.php',
            __DIR__ . '/../routes/api/day_of_the_week.php',
            __DIR__ . '/../routes/api/customers.php',
            __DIR__ . '/../routes/api/leap_year.php',
            __DIR__ . '/../routes/api/shuffle_the_array.php',
            __DIR__ . '/../routes/api/short_url.php',
        ],
        commands: __DIR__.'/../routes/console.php',
        health: '/up',
    )
    ->withMiddleware(function (Middleware $middleware) {
        //
    })
    ->withExceptions(function (Exceptions $exceptions) {
        //
    })->create();
