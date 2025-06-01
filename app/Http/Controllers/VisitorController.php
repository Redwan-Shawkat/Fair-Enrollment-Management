<?php

namespace App\Http\Controllers;

use App\Models\Visitor;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;


class VisitorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // $visitors = Visitor::all();
        $visitors = Visitor::paginate(10);
        return view('layouts.visitor.visitor',compact('visitors'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('layouts.visitor.visitor_form');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // if(!Auth::user() || Auth::user()->is_admin == 0){
        //     return response()->json(['error' => 'Unauthorized'],403);
        // }

        $validated = $request->validate([
            'visitorname' => 'required',
            'visitorcompany' => 'required',
            'email' => 'email|required|unique:visitor,email',
            'mobileno' => 'nullable|string|min:11|max:11',
            'gender' => 'nullable|in:male,female,other',
            'thoughts' => 'nullable|string'
        ]);

        // // Crosscheck [Starts]
        // Log::info('Validation passed', $validated);
        //  // Crosscheck [Ends]

        // Without DB
        /*
        $visitor = Visitor::create([
            'name' => $validated['name'],
            'company' => $validated['company'],
            'email' => $validated['email'],
            'mobileno' => $validated['mobileno'],
            'gender' => $validated['gender'],
            'thoughts' => $validated['thoughts']
        ]);
        */

        // With Saving at DB
        $visitor = new Visitor();
        $visitor->visitorname = $validated['visitorname'];
        $visitor->visitorcompany = $validated['visitorcompany'];
        $visitor->email = $validated['email'];
        $visitor->mobileno = $validated['mobileno'];
        $visitor->gender = $validated['gender'];
        $visitor->thoughts = $validated['thoughts'];
        $visitor->save();

        // $saved = $visitor->save();

        // // Crosscheck [Starts]
        // Log::info('Visitor save result', ['saved' => $saved, 'visitor_id' => $visitor->id]);

        // if ($saved) {
        //         return redirect()->route('visitor.index')->with('success', 'Visitor created successfully');
        //     } else {
        //         return redirect()->back()->withInput()->with('error', 'Failed to save visitor');
        //     }

        // } catch (\Illuminate\Validation\ValidationException $e) {
        //     Log::error('Validation failed', ['errors' => $e->errors()]);
        //     return redirect()->back()->withErrors($e->validator)->withInput();
        // } catch (\Exception $e) {
        //     Log::error('Error saving visitor', ['error' => $e->getMessage(), 'trace' => $e->getTraceAsString()]);
        //     return redirect()->back()->withInput()->with('error', 'An error occurred while saving the visitor');
        // }
        // // Crosscheck [End]



        /* Alert */
        // return redirect()->route('visitor.index') -> with('success', 'Visitor created successfully');

        /*
        [Storing in DB]

        */

        /*
        [Response Return]
        return response() -> json($visitor, 201);
        */
    }

    /**
     * Display the specified resource.
     */
    public function show(Visitor $visitor)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Visitor $visitor)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Visitor $visitor)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Visitor $visitor)
    {
        //
    }
}
