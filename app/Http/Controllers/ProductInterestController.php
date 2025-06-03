<?php

namespace App\Http\Controllers;

use App\Models\product_interest;
use Illuminate\Http\Request;

class ProductInterestController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products = product_interest::paginate(5);
        return view('layouts.product_interest.product_interest',compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('layouts.product_interest.product_interest_form');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required',
            'active_status' => 'nullable|in:0,1',
        ]);

        // With Saving at DB
        $product = new product_interest();
        $product->name = $validated['name'];
        $product->active_status = $validated['active_status'];
        $product->save();

        return redirect()->route('product.index') -> with('success','Product Interest is Added Successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(product_interest $product_interest)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(product_interest $product_interest)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, product_interest $product_interest)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(product_interest $product_interest)
    {
        //
    }
}
