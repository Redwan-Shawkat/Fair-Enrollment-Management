<?php

namespace App\Http\Controllers;

use App\Models\Company;
use Illuminate\Http\Request;

// Intervention (for making image comprossed)
// use Intervention\Image\Laravel\Facades\Image;


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
        $logoName = $request->logo->getClientOriginalName();

        //Checking if the storage path exists, if not - create one
        $imagePath = public_path('images');
        if(!file_exists($imagePath)){
            mkdir($imagePath,0755,true);
        }

        // // Resize & Compressed
        // $image = Image::make($request->logo);
        // $image->resize(300,300,function($constraint){
        //     $constraint->aspectRatio(); //Maintain Aspect Ratio
        //     $constraint->upsize(); //Don't Upsize Small Images
        // });



        // Moving the image to storage (without compression)
        $request -> logo->move(public_path('images'),$logoName);

        // Compressed Image Save
        // $image->save($imagePath.'/'.$logoName,80); //80% data is being saved on DBs

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
