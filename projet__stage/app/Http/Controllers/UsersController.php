<?php

namespace App\Http\Controllers;
use App\Models\User;

use Illuminate\Http\Request;

class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('welcome');
    }


    public function indexCommercial()
    {
        $users = User::where('role', 'commercial')->get();
        return view('user.index', compact('users'));
    }

    public function indexTechnicien()
    {
        $users = User::where('role', 'technicien')->get();
        return view('user.index', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('user.create');
        
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|min:3',
            'email' => 'required|email',
            'password' => 'required|min:6|max:50|confirmed',
            'phone' => 'required',
            'cin' => 'required',
            'role'=>'required|in:commercial,admin,technicien',
            'address' => 'nullable|string|min:5|max:255',
            'speciality' => 'nullable|in:electricien,plombier,menuisier,peintre',
            'experience' => 'nullable|integer',
            'status' => 'nullable|in:Active,Inactive',
        ]);
        
        $user = new User();
        $user->name = strip_tags($request->input('name'));
        $user->email = strip_tags($request->input('email'));
        $user->password = Hash::make($request->input('password'));
        $user->phone = strip_tags($request->input('phone'));
        $user->cin = strip_tags($request->input('cin'));
        $user->role = strip_tags($request->input('role'));

        if($user->role == 'technicien'){
            $user->address = strip_tags($request->input('address'));
            $user->speciality = strip_tags($request->input('speciality'));
            $user->experience = strip_tags($request->input('experience'));
            $user->status = strip_tags($request->input('status'));
        }
        $user->save();

        if ($user->role === 'technicien') {
            return redirect()->route('users.techniciens')->with('success', 'Utilisateur créé avec succès');
        } else {
            return redirect()->route('users.commercials')->with('success', 'Utilisateur créé avec succès');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(User $user)
    {
        $user = User::findOrFail($user); // Trouve l'utilisateur par son ID
        return view('users.show', compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(User $user)
    {
        return view('user.edit',compact( 'user'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, User $user)
    {
        $request->validate([
            'name' => 'required|min:3',
            'email' => 'required|email',
            'password' => 'required|min:6|max:50|confirmed',
            'phone' => 'required',
            'cin' => 'required',
            'role'=>'required|in:commercial,admin,technicien',
            'address' => 'nullable|string|min:5|max:255',
            'speciality' => 'nullable|in:electricien,plombier,menuisier,peintre',
            'experience' => 'nullable|integer',
            'status' => 'nullable|in:Active,Inactive',
        ]);
        if($request->password){
        $user->password = Hash::make($request->input('password'));
        }

        $to_update = Commercial::findOrFail($user);
        $to_update->name = strip_tags($request->input('name'));
        $to_update->email = strip_tags($request->input('email'));
        $to_update->password = Hash::make($request->input('password'));
        $to_update->phone = strip_tags($request->input('phone'));
        $to_update->address = strip_tags($request->input('cin'));
        $to_update->role = strip_tags($request->input('role'));
        $to_update->cin = strip_tags($request->input('address'));
        $to_update->address = strip_tags($request->input('address'));
        $to_update->speciality = strip_tags($request->input('speciality'));
        $to_update->experience = strip_tags($request->input('experience'));
        $to_update->status = strip_tags($request->input('status'));
        $to_update->save();

        return redirect()->route('users.show', $user->id)->with('success', 'Votre compte a été modifié avec succès');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $user->delete();
        return to_route('users.index')->with('success','Le compte a été bien supprimé');
    }
}
