<?php

namespace App\Http\Controllers;

use App\Models\profession;
use Illuminate\Http\Request;

// Intervention (for making image resize & comprossed)
use Intervention\Image\ImageManager;
use Intervention\Image\Drivers\Gd\Driver;

class ProfessionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // $professions = profession::all();
        $professions = profession::paginate(8);
        return view('layouts.profession.profession', compact('professions'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view ('layouts.profession.profession_form');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request -> validate([
            'name' => 'required',
            'active_status' => 'in:0,1',
        ]);

        $profession = new profession();
        $profession->name = $validated ['name'];
        $profession->active_status = $validated['active_status'] ?? 0;
        $profession->save();

        return redirect()->route('profession.index')->with('success','Profession is added Successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(profession $profession)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(profession $profession)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, profession $profession)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(profession $profession)
    {
        //
    }
}
