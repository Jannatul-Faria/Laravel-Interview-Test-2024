<?php

namespace App\Http\Controllers;

use App\Models\Country;

use Illuminate\Http\Request;

class CountryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
    //     $countries=Country::all();
    //    return view('table',compact('countries'));
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
        // $request->validate([
        //     'name'=> 'required|unique:countries'
        // ]);

        // $country=Country::create([
        //     'name'=> $request->name,
        // ]);

        // return response()->json([
        //     'success'=>true,
        //     'data'=>$country,
        // ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(Country $country)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Country $country)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Country $country)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Country $country)
    {
        // $country->delete();
        // return response()->json([
        //     'success'=>true,
        // ]);
    }
}
