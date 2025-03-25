<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Technicien;

class TechniciensController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('techniciens.index', [
            'techniciens' => Technicien::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('techniciens.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        
        $request->validate([
            'technicien-name' => 'required',
            'technicien-email' => 'required|email',
            'technicien-phone' => 'required',
            'technicien-address' => 'required',
            'technicien-speciality' => 'required',
            'technicien-experience' => 'required',
            'technicien-status' => 'required',
            'role' => 'required',
            'cin' => 'required'
        ]);
        
        $technicien = new Technicien();
        $technicien->name = strip_tags($request->input('technicien-name'));
        $technicien->email = strip_tags($request->input('technicien-email'));
        $technicien->phone = strip_tags($request->input('technicien-phone'));
        $technicien->address = strip_tags($request->input('technicien-address'));
        $technicien->speciality = strip_tags($request->input('technicien-speciality'));
        $technicien->experience = strip_tags($request->input('technicien-experience'));
        $technicien->status = strip_tags($request->input('technicien-status'));
        $technicien->role = strip_tags($request->input('role'));
        $technicien->cin = strip_tags($request->input('cin'));
        $technicien->save();
        return redirect()->route('techniciens.index');

    }

    /**
     * Display the specified resource.
     */
    public function show( $technicien)
    {
        return view('techniciens.show',[
            'technicien' => Technicien::findOrFail($technicien)
        ]);
        
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $technicien)
    {
        return view('techniciens.edit', [
            'technicien' => Technicien::findOrFail($technicien)
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $technicien)
    {

        $request->validate([
            'technicien-name' => 'required',
            'technicien-email' => 'required|email',
            'technicien-phone' => 'required',
            'technicien-address' => 'required',
            'technicien-speciality' => 'required',
            'technicien-experience' => 'required',
            'technicien-status' => 'required'
        ]);

        $to_update = Technicien::findOrFail($technicien);
        $to_update->name = strip_tags($request->input('technicien-name'));
        $to_update->email = strip_tags($request->input('technicien-email'));
        $to_update->phone = strip_tags($request->input('technicien-phone'));
        $to_update->address = strip_tags($request->input('technicien-address'));
        $to_update->speciality = strip_tags($request->input('technicien-speciality'));
        $to_update->experience = strip_tags($request->input('technicien-experience'));
        $to_update->status = strip_tags($request->input('technicien-status'));
        $to_update->save();
        return redirect()->route('techniciens.show', $technicien);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $technicien)
    {
        $to_delete=Technicien::findorfail($technicien);
        $to_delete->delete();
        return redirect()->route('techniciens.index');
    }
}
