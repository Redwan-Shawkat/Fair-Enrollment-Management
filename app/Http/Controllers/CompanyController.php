<?php

namespace App\Http\Controllers;

use App\Models\Company;
use Illuminate\Http\Request;

// Intervention (for making image resize & comprossed)
use Intervention\Image\ImageManager;
use Intervention\Image\Drivers\Gd\Driver;


class CompanyController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $companies = Company::all();
         return view('layouts.company.company',compact('companies'));
    }

    /**
     * Show the form for creating a new resource.
     */

    public function create()
    {
        return view('layouts.company.company_form');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|unique:companyinfo,name',
            'address' =>'required',
            'logo' => 'required|image|mimes:jpeg,jpg,png,gif|max:2048',
            'isactive' => 'in:0,1',
            'input_field_ids' => 'string'
        ]);

        // Image Name
        // $logoName = time().'.'.$request->logo->extension();
        // $logoName = $request->logo->getClientOriginalName();

        //Checking if the storage path exists, if not - create one
        $imagePath = public_path('images');
        if(!file_exists($imagePath)){
            mkdir($imagePath,0755,true);
        }

        // Resize & Compressed
        $manager = new ImageManager(new Driver());
        // Image Name
        $logoName = $request->logo->getClientOriginalName();
        // Read the image file
        $img = $manager -> read($request->file('logo'));
        // Resize
        // $img = $img -> resize(370,246);
        $img = $img -> resize(130,80);


        // $img ->toJpeg(80)->save(public_path('images'),$logoName);
        $img ->toJpeg(80)->save(public_path('images/' . $logoName));
        //toJpeg(80) : 80 is the quality here


        // Moving the image to storage (without compression)
        // $request -> logo->move(public_path('images'),$logoName);


        // Creating Data + Saving on DB
        $company = new Company();
        $company->name = $validated['name'];
        $company->address = $validated['address'];
        $company->logo = 'images/'.$logoName;
        $company->isactive = $validated['isactive'] ?? 1;
        $company->input_field_ids = $validated['input_field_ids'] ?? '';
        $company->save();

        return redirect()->route('company.index') -> with('success','Company is Added Successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(Company $company)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Company $company)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Company $company)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Company $company)
    {
        //
    }
}
