<?php

namespace App\Http;

use Illuminate\Foundation\Http\Kernel as HttpKernel;

class Kernel extends HttpKernel
{
    /**
     * The application's route middleware.
     *
     * @var array
     */
    // protected $routeMiddleware = [
        // filepath: /c:/Users/bloka/OneDrive/Bureau/PROJET DE STAGE/projet__stage/app/Http/Kernel.php

    // ...existing code...
    // 'check.role' => \App\Http\Middleware\CheckRole::class,

        // 'auth' => \App\Http\Middleware\Authenticate::class,
        // 'role' => \App\Http\Middleware\CheckRole::class,
        // Add other middleware as needed
    // ];








    protected $routeMiddleware = [
        'auth' => \App\Http\Middleware\Authenticate::class,
        'auth.basic' => \Illuminate\Auth\Middleware\AuthenticateWithBasicAuth::class,
        'cache.headers' => \Illuminate\Http\Middleware\SetCacheHeaders::class,
        'can' => \Illuminate\Auth\Middleware\Authorize::class,
        'guest' => \App\Http\Middleware\RedirectIfAuthenticated::class,
        'password.confirm' => \Illuminate\Auth\Middleware\RequirePassword::class,
        'signed' => \Illuminate\Routing\Middleware\ValidateSignature::class,
        'throttle' => \Illuminate\Routing\Middleware\ThrottleRequests::class,
        'verified' => \Illuminate\Auth\Middleware\EnsureEmailIsVerified::class,
        // 'role' => \App\Http\Middleware\CheckRole::class, // Make sure this line exists
    ];

}