<?php

use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;

//mise a jour
// use App\Http\Middleware\CheckRole;
use App\Http\Middleware\AdminMiddleware;
use App\Http\Middleware\CommercialMiddleware;
use App\Http\Middleware\TechnicienMiddleware;



return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: __DIR__.'/../routes/web.php',
        commands: __DIR__.'/../routes/console.php',
        health: '/up',
    )
    ->withMiddleware(function (Middleware $middleware) {
        $middleware->alias([
//mise a jour
            // 'auth' => \App\Http\Middleware\CheckRole::class,
            // 'role' => \App\Http\Middleware\CheckRole::class,

            'admin' => AdminMiddleware::class,
            'commercial' => CommercialMiddleware::class,
            'Technicien' => TechnicienMiddleware::class
        ]);
    })
    ->withExceptions(function (Exceptions $exceptions) {
        //
    })->create();
