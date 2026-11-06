<?php

use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;

return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: __DIR__.'/../routes/web.php',
        commands: __DIR__.'/../routes/console.php',
        health: '/up',
    )
    ->withMiddleware(function (Middleware $middleware) {
        /*
         * The app sits behind nginx, which terminates TLS and forwards traffic over
         * HTTP. Without trusting the X-Forwarded-* headers Laravel sees the request as
         * http and generates asset URLs with `http://` - on a page served over HTTPS
         * the browser blocks them as mixed content and the page loaded with no styles
         * at all.
         *
         * Trusting all addresses is safe here: the app container cannot be reached
         * from outside other than through this nginx.
         */
        $middleware->trustProxies(at: '*');
    })
    ->withExceptions(function (Exceptions $exceptions) {
        //
    })->create();
