<?php

namespace App\Http\Controllers;

use App\Models\Country;
use App\Models\State;
use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;
use DataTables;

class StateController extends Controller
{
    /**
     * Display a listing of the resource.
     */

     public function index(Request $request)
     {
         if ($request->ajax()) {
             $data = State::with('country'); // Eager load countries
 
             return DataTables::of($data)
                 ->addIndexColumn()
                 ->addColumn('country_name', function ($row) {
                     return $row->country->name ?? 'N/A';
                 })
                 ->addColumn('action', function ($row) {
                     $btn = '<a href="javascript:void(0)" data-id="' . $row->id . '" class="btn btn-info btn-sm showstate">View</a>';
                     $btn .= ' <a href="javascript:void(0)" data-id="' . $row->id . '" class="btn btn-primary btn-sm editstate">Edit</a>';
                     $btn .= ' <a href="javascript:void(0)" data-id="' . $row->id . '" class="btn btn-danger btn-sm deletestate">Delete</a>';
                     return $btn;
                 })
                 ->rawColumns(['action'])
                 ->make(true);
         }
 
         $countries = Country::all(); // Pass countries to the view
         return view('states', compact('countries'));
     }
 
     public function store(Request $request)
     {
         $request->validate([
             'name' => 'required',
             'country_id' => 'required|exists:countries,id',
         ]);
 
         State::updateOrCreate(['id' => $request->state_id], $request->only('name', 'country_id'));
 
         return response()->json(['success' => 'State saved successfully.']);
     }
 
     public function show($id)
     {
         $state = State::find($id);
         return response()->json($state);
     }
 
     public function edit($id)
     {
         $state = State::find($id);
         return response()->json($state);
     }
 
     public function destroy($id)
     {
         State::find($id)->delete();
         return response()->json(['success' => 'State deleted successfully.']);
     }
   
}
