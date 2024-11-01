<?php

namespace App\Http;

use Illuminate\Foundation\Http\Kernel as HttpKernel;

class Kernel extends HttpKernel
{
    protected $middleware = [
        \App\Http\Middleware\HttpRedirect::class
    ];

    protected $middlewareGroups = [
        'web' => [],
        'api' => [
            \Laravel\Sanctum\Http\Middleware\EnsureFrontendRequestsAreStateful::class,
            'throttle:api',
            \Illuminate\Routing\Middleware\SubstituteBindings::class,
        ],
        'https' => [
            \Illuminate\Routing\Middleware\ForceHttps::class,
        ],
    ];

    protected $routeMiddleware = [];
}