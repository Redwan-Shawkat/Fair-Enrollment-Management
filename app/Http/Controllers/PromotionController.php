<?php

namespace App\Http\Controllers;

use App\Models\promotion;
use Illuminate\Http\Request;

// Intervention (for making image resize & comprossed)
use Intervention\Image\ImageManager;
use Intervention\Image\Drivers\Gd\Driver;

class PromotionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $promotions = promotion::paginate(4);
        // $promotions = promotion::all();
        return view('layouts.promotion.promotion',compact('promotions'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view ('layouts.promotion.promotion_form');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'prom_offer_name' => 'required|string',
            'logo' => 'required|image|mimes:jpeg,jpg,png,gif|max:2048',
            'is_active' => 'in:0,1',
            'validate_from' => 'required|date',
            'validate_to' => 'required|date|after:validate_from'
        ]);

        $imagePath = public_path('images');
        if(!file_exists($imagePath)){
            mkdir($imagePath,0755,true);
        }

        // Resize and Compressed
        $manager = new ImageManager(new Driver());
        $logoName = $request->logo->getClientOriginalName();
        $img = $manager -> read($request->file('logo'));
        $img = $img -> resize(130,80);

        $img -> toJpeg(80)->save(public_path('images/'.$logoName));

        $promotional_offer = new promotion();
        $promotional_offer->prom_offer_name = $validated['prom_offer_name'];
        $promotional_offer->logo = $validated ['logo'];
        $promotional_offer->is_active = $validated ['is_active'] ?? 1;
        $promotional_offer->validate_from = $validated ['validate_from'];
        $promotional_offer->validate_to = $validated ['validate_to'];
        $promotional_offer->save();

        return redirect()->route('promotion.index') -> with('success','Promotional Offer is  Added Successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(promotion $promotion)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(promotion $promotion)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, promotion $promotion)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(promotion $promotion)
    {
        //
    }
}
