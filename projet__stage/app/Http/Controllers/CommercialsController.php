<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Commercial;
use App\Models\User;
class CommercialsController extends Controller
{

    // public function __construct(){
    //     $this->middleware('auth');
    //     $this->middleware('role:commercial')->only('show');
    //     $this->middleware('role:admin');
    // }
    public function index()
    {
        // $users = User::where('role','commercial')->get();
        // return view(commercial.index,compact('users'));
        $users = User::where('role', 'commercial')->get();
        $commercials = Commercial::all();
        return view('commercials.index', compact('users', 'commercials'));

        // return view('commercials.index', [
        //     'commercials' => Commercial::all()
        // ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('commercials.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'commercial-name' => 'required',
            'commercial-email' => 'required|email',
            'commercial-phone' => 'required',
            'commercial-address' => 'required',
            'role' => 'required',
            'cin' => 'required'
        ]);
        
        $commercial = new Commercial();
        $commercial->name = strip_tags($request->input('commercial-name'));
        $commercial->email = strip_tags($request->input('commercial-email'));
        $commercial->phone = strip_tags($request->input('commercial-phone'));
        $commercial->address = strip_tags($request->input('commercial-address'));
        $commercial->role = strip_tags($request->input('role'));
        $commercial->cin = strip_tags($request->input('cin'));
        $commercial->save();
        return redirect()->route('commercials.index');
    }

    /**
     * Display the specified resource.
     */
    public function show( $id)
    {
        return view('commercials.show', [
            'commercial' => Commercial::findOrFail($id)
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $commercial)
    {
        return view('commercials.edit', [
            'commercial' => Commercial::findOrFail($commercial)
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $commercial)
    {
        $request->validate([
            'commercial-name' => 'required',
            'commercial-email' => 'required|email',
            'commercial-phone' => 'required',
            'commercial-address' => 'required',
            'role' => 'required',
            'cin' => 'required'
        ]);

        $to_update = Commercial::findOrFail($commercial);
        $to_update->name = strip_tags($request->input('commercial-name'));
        $to_update->email = strip_tags($request->input('commercial-email'));
        $to_update->phone = strip_tags($request->input('commercial-phone'));
        $to_update->address = strip_tags($request->input('commercial-address'));
        $to_update->role = strip_tags($request->input('role'));
        $to_update->cin = strip_tags($request->input('cin'));
        $to_update->save();
        return redirect()->route('commercials.show', $commercial);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $commercial)
    {
        $to_delete=Commercial::findOrFail($commercial);
        $to_delete->delete();
        return redirect()->route('commercials.index');
    }
}
