<?php

namespace App\Http\Controllers;

use App\Models\Country;
use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;
use DataTables;

class CountryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
     
        if ($request->ajax()) {
  
            $data = Country::query();
  
            return Datatables::of($data)
                    ->addIndexColumn()
                    ->addColumn('action', function($row){
   
                           $btn = '<a href="javascript:void(0)" data-toggle="tooltip"  data-id="'.$row->id.'" data-original-title="View" class="me-1 btn btn-info btn-sm showcountry"><i class="fa-regular fa-eye"></i> View</a>';
                           $btn = $btn. '<a href="javascript:void(0)" data-toggle="tooltip"  data-id="'.$row->id.'" data-original-title="Edit" class="edit btn btn-primary btn-sm editcountry"><i class="fa-regular fa-pen-to-square"></i> Edit</a>';
   
                           $btn = $btn.' <a href="javascript:void(0)" data-toggle="tooltip"  data-id="'.$row->id.'" data-original-title="Delete" class="btn btn-danger btn-sm deletecountry"><i class="fa-solid fa-trash"></i> Delete</a>';
    
                            return $btn;
                    })
                    ->rawColumns(['action'])
                    ->make(true);
        }
        
        return view('countries');
    }
       
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request): JsonResponse
    {
        $request->validate([
            'name' => 'required',
            
        ]);
        
        Country::updateOrCreate([
                    'id' => $request->country_id
                ],
                [
                    'name' => $request->name, 
                   
                ]);        
     
        return response()->json(['success'=>'country saved successfully.']);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Country  $country
     * @return \Illuminate\Http\Response
     */
    public function show($id): JsonResponse
    {
        $country = Country::find($id);
        return response()->json($country);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Country  $country
     * @return \Illuminate\Http\Response
     */
    public function edit($id): JsonResponse
    {
        $country = Country::find($id);
        return response()->json($country);
    }
    
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Country  $country
     * @return \Illuminate\Http\Response
     */
    public function destroy($id): JsonResponse
    {
        Country::find($id)->delete();
      
        return response()->json(['success'=>'country deleted successfully.']);
    }
}
