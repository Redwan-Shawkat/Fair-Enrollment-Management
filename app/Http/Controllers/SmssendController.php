<?php

namespace App\Http\Controllers;

use App\Models\smssend;
use Illuminate\Http\Request;

class SmssendController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $smssends = smssend::paginate(4);
        return view('layouts.message.sms_send.smssend',compact('smssends'));
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
    public function show(smssend $smssend)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(smssend $smssend)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, smssend $smssend)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(smssend $smssend)
    {
        //
    }
}
