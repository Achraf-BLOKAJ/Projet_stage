<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class AuthController extends Controller
{
     public function showRegistrationForm()
    {
        // Afficher le formulaire d'inscription
        return view('register');
    }

    // Traiter l'inscription
    public function register(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8',
            'role' => 'required|string|in:admin,commercial,technicien', // Validation du rôle
        ]);

        // Créer l'utilisateur
        $user = User::create([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'password' => Hash::make($request->input('password')),
            'role' => $request->input('role'),
        ]);


        // $user = new User();
        // $user->name = $request->input('name');
        // $user->email = $request->input('email');
        // $user->password = Hash::make($request->input('password'));
        // $user->role = $request->input('role');
        // $user->save();

        // Connecter l'utilisateur après l'inscription
        Auth::login($user);

        return redirect()->route('login'); // Rediriger vers le tableau de bord
    }

    // Afficher le formulaire de connexion
    public function showLoginForm()
    {
        return view('login');
    }

    // Traiter la connexion
    // public function login(Request $request)
    // {
    //     $request->validate([
    //         'email' => 'required|string|email',
    //         'password' => 'required|string',
    //     ]);

    //     // Tentative de connexion
    //     if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
    //         $request->session()->regenerate();
    //         return redirect()->intended('dashboard'); // Rediriger vers le tableau de bord
    //     }

    //     // Si la connexion échoue
    //     return back()->withErrors([
    //         'email' => 'Les informations de connexion sont incorrectes.',
    //     ]);
    // }

//hna
    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|string|email',
            'password' => 'required|string',
        ]);

        // Tentative de connexion
        if (Auth::attempt(['email' => $request->input('email'), 'password' => $request->input('password')],true)) 
        {
            $request->session()->regenerate();

            // Redirection en fonction du rôle
            $user = Auth::User();
            if (Auth::User()->role == 'admin') {
                return redirect()->route('clients.index');
            } elseif ($user->role === 'commercial') {
                return redirect()->route('clients.index');
            } elseif ($user->role === 'technicien') {
                return redirect()->route('techniciens.index');
            }else {
                // return redirect('login')->with('error','Not available email');
            }
        }

        // Si la connexion échoue
        return redirect()->back()->withErrors([
            'email' => 'Les informations de connexion sont incorrectes.',
        ]);
    }
//last methode 
//     public function login(Request $request)
// {
//     $request->validate([
//         'email' => 'required|string|email',
//         'password' => 'required|string',
//     ]);

//     // Tentative de connexion
//     if (Auth::attempt(['email' => $request->input('email'), 'password' => $request->input('password')])) {
//         $request->session()->regenerate();

//         // Redirection en fonction du rôle
//         $user = Auth::user();
//         if ($user->role === 'admin') {
//             return redirect()->route('clients.index');
//         } elseif ($user->role === 'commercial') {
//             return redirect()->route('clients.index');
//         } elseif ($user->role === 'technicien') {
//             // Use the authenticated user's ID as the technicien parameter
//             return redirect()->route('techniciens.show', ['technicien' => $user->id]);
//         }
//     }

//     // Si la connexion échoue
//     return back()->withErrors([
//         'email' => 'Les informations de connexion sont incorrectes.',
//     ]);
// }

    // Déconnexion
    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/');
    }
}
