<?php

namespace App\Http\Controllers;

use App\Models\City;
use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;

class CityController extends Controller
 {
//     /**
//      * Display a listing of the resource.
//      */
//     public function index(Request $request)
//     {
     
//         if ($request->ajax()) {
  
//             $data = City::query();
  
//             return Datatables::of($data)
//                     ->addIndexColumn()
//                     ->addColumn('action', function($row){
   
//                            $btn = '<a href="javascript:void(0)" data-toggle="tooltip"  data-id="'.$row->id.'" data-original-title="View" class="me-1 btn btn-info btn-sm showcity"><i class="fa-regular fa-eye"></i> View</a>';
//                            $btn = $btn. '<a href="javascript:void(0)" data-toggle="tooltip"  data-id="'.$row->id.'" data-original-title="Edit" class="edit btn btn-primary btn-sm editcity"><i class="fa-regular fa-pen-to-square"></i> Edit</a>';
   
//                            $btn = $btn.' <a href="javascript:void(0)" data-toggle="tooltip"  data-id="'.$row->id.'" data-original-title="Delete" class="btn btn-danger btn-sm deletecity"><i class="fa-solid fa-trash"></i> Delete</a>';
    
//                             return $btn;
//                     })
//                     ->rawColumns(['action'])
//                     ->make(true);
//         }
        
//         return view('cities');
//     }
       
//     /**
//      * Store a newly created resource in storage.
//      *
//      * @param  \Illuminate\Http\Request  $request
//      * @return \Illuminate\Http\Response
//      */
//     public function store(Request $request): JsonResponse
//     {
//         $request->validate([
//             'name' => 'required',
//             'detail' => 'required',
//         ]);
        
//         City::updateOrCreate([
//                     'id' => $request->city_id
//                 ],
//                 [
//                     'name' => $request->name, 
//                     'detail' => $request->detail
//                 ]);        
     
//         return response()->json(['success'=>'city saved successfully.']);
//     }

//     /**
//      * Show the form for editing the specified resource.
//      *
//      * @param  \App\City  $city
//      * @return \Illuminate\Http\Response
//      */
//     public function show($id): JsonResponse
//     {
//         $city = City::find($id);
//         return response()->json($city);
//     }

//     /**
//      * Show the form for editing the specified resource.
//      *
//      * @param  \App\City  $city
//      * @return \Illuminate\Http\Response
//      */
//     public function edit($id): JsonResponse
//     {
//         $city = City::find($id);
//         return response()->json($city);
//     }
    
//     /**
//      * Remove the specified resource from storage.
//      *
//      * @param  \App\City  $city
//      * @return \Illuminate\Http\Response
//      */
//     public function destroy($id): JsonResponse
//     {
//         City::find($id)->delete();
      
//         return response()->json(['success'=>'city deleted successfully.']);
//     }
 }
