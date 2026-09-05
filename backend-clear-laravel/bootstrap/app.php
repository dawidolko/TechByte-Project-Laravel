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
         * Aplikacja stoi za nginx, ktory konczy TLS i przekazuje ruch po HTTP.
         * Bez zaufania do naglowkow X-Forwarded-* Laravel widzi zadanie jako
         * http i generuje adresy zasobow z `http://` — na stronie serwowanej
         * po HTTPS przegladarka blokuje je jako mieszana tresc i strona
         * ladowala sie zupelnie bez styli.
         *
         * Zaufanie do wszystkich adresow jest tu bezpieczne: do kontenera
         * aplikacji nie da sie dostac z zewnatrz inaczej niz przez ten nginx.
         */
        $middleware->trustProxies(at: '*');
    })
    ->withExceptions(function (Exceptions $exceptions) {
        //
    })->create();
