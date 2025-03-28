<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Auth;

class TechnicienMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        // Check if the user is authenticated
        if (Auth::check()) {
            $user = Auth::user(); // Get the currently authenticated user

            // Check if the user is a 'technicien'
            if ($user->role == 'technicien') {
                // Get the current route name
                $currentRouteName = $request->route()->getName();

                // Block access to 'clients.*' and 'commercials.*' routes for techniciens
                // if (strpos($currentRouteName, 'clients.') === 0 || strpos($currentRouteName, 'commercials.') === 0) {
                //     return abort(403, 'You do not have permission to access this page.');
                // }

                // Allow access to 'techniciens.index' and 'techniciens.show' routes
                $allowedRoutes = [
                    'techniciens.index',
                    'techniciens.show'
                ];

                // If the route is not allowed for the technicien role, block access
                if (!in_array($currentRouteName, $allowedRoutes)) {
                    return abort(403, 'You do not have permission to access this page.');
                }

                // Allow the technicien to proceed if the route is allowed
                return $next($request);
            }

            // If the user is not a 'technicien', log them out and redirect to login
            return $next($request);
        }
        else {
            // If the user is not authenticated, log them out and redirect to login page
            Auth::logout();
            return redirect()->route('login');
        }
    }
}
