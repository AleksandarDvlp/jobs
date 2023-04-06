<?php

namespace App\Http\Controllers;

use App\Models\Listing;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class ListingController extends Controller
{
    public function index(){
        return view('listings.index',[
            'listings'=>Listing::latest()->filter(request(['tehnology','search','statusi','job_links']))->paginate(6)]);
            
    }

    public function show(Listing $listing){

        return view('listings.show',[
            'listing'=>$listing
        ]);
    }

    // Show Create Form

    public function create(){
        return view('listings.create');
    }

    // Store Listing Data

    public function store(Request $request){
        $formFields=$request->validate([
            'company'=>'required',
            // 'company'=>['required', Rule::unique('listings','company')],
            'location'=>'required',
            'job_link'=>'nullable',
            // 'website'=>'required',
            'tehnologies'=>'required',
            'description'=>'required',
            'comment'=>'nullable',
            'status'=>'nullable'
        ]);

        Listing::create($formFields);



        return redirect('/')->with('message','the job has been entered into the database');
    }

    // Show Edit Form

    public function edit(Listing $listing){
        return view('listings.edit', ['listing'=>$listing]);
    }

    // Update Listing data

    public function update(Request $request, Listing $listing){
        $formFields=$request->validate([
            'company'=>['required'],
            'location'=>'required',
            'job_link'=>'nullable',
            'website'=>'nullable',
            'tehnologies'=>'required',
            'description'=>'required',
            'comment'=>'nullable',
            'status'=>'nullable'
        ]);

        $listing->update($formFields);

        return back()->with('message','the job has been updated');
    }

    // Delete Listing

    public function destroy(Listing $listing){
        $listing->delete();
        return redirect('/')->with('message','Job post deleted successfully');
    }

}
