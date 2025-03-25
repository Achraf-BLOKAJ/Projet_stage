<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
// use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;

class CheckRole
{
    // public function handle(Request $request, Closure $next, $role = null): Response
    // {
    //     // Log the incoming request and role
    //     Log::info('CheckRole middleware invoked', [
    //         'user' => Auth::user(),
    //         'role' => $role,
    //     ]);

    //     // Vérifier si l'utilisateur est connecté
    //     if (!Auth::check()) {
    //         return redirect()->route('login');
    //     }

    //     // Vérifier le rôle de l'utilisateur
    //     $user = Auth::user();
    //     if ($user->role !== $role) {
    //         abort(403, 'Accès non autorisé.');
    //     }
    //     // elseif('admin'==$role){
    //     //     return $next($request);
    //     // }

    //      return $next($request);
    // }








    public function handle($request, Closure $next, $role=null)
{
    if (!auth()->user()) {
        return redirect('/login'); // Or redirect to an unauthorized page
    }


    // $user = auth()->user();
    
    // if ($user->hasRole('technicien')) {
    //     // Check if the user is trying to access any route other than 'techniciens.index'
    //     if ($request->route()->getName() !== 'techniciens.index') {
    //         // Redirect with error message
    //         return redirect()->route('techniciens.index')->withErrors('Tu n\'as pas accès à cette page.');
    //     }
    // }

    return $next($request);
}
}





