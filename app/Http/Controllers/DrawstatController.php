<?php

namespace App\Http\Controllers;

use App\Models\drawstat;
use Illuminate\Http\Request;

class DrawstatController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $drawstats = drawstat::paginate(10);
        return view('layouts.drawstat.drawstat',compact('drawstats'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(drawstat $drawstat)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(drawstat $drawstat)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, drawstat $drawstat)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(drawstat $drawstat)
    {
        //
    }
}
