<?php

namespace App\Http\Controllers;

use App\Models\sms_content;
use Illuminate\Http\Request;

class SmsContentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $smscontents = sms_content::paginate(4);
        return view('layouts.message.sms_content.smscontent',compact('smscontents'));
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
    public function show(sms_content $sms_content)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(sms_content $sms_content)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, sms_content $sms_content)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(sms_content $sms_content)
    {
        //
    }
}
