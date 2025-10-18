<?php

use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;

// Configura e cria a aplicação Laravel
return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: __DIR__.'/../routes/web.php',         // Rotas web
        commands: __DIR__.'/../routes/console.php', // Comandos do console
        health: '/up',                              // Endpoint de saúde
    )
    ->withMiddleware(function (Middleware $middleware) {
        // Aqui você pode adicionar middleware personalizados
    })
    ->withExceptions(function (Exceptions $exceptions) {
        // Aqui você pode adicionar tratamento de exceções personalizados
    })->create();
