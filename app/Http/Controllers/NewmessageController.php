<?php

namespace App\Http\Controllers;

use App\Models\newmessage;
use Illuminate\Http\Request;

class NewmessageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $message_send = newmessage::paginate(5);
        return view('layouts.message.new_message.new_message',compact('message_send'));
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
    public function show(newmessage $newmessage)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(newmessage $newmessage)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, newmessage $newmessage)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(newmessage $newmessage)
    {
        //
    }
}
