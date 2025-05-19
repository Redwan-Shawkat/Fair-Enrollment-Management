<?php

namespace App\Http\Controllers;

use App\Models\message_template;
use Illuminate\Http\Request;

class MessageTemplateController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $message_templates = message_template::paginate(4);
        return view('layouts.message.message_template.message_template',compact('message_templates'));
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
    public function show(message_template $message_template)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(message_template $message_template)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, message_template $message_template)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(message_template $message_template)
    {
        //
    }
}
