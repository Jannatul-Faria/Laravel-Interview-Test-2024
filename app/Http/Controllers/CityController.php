<?php

namespace App\Http\Controllers;

use App\Models\City;
use App\Models\State;
use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;

class CityController extends Controller
 {
    
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $data = City::with('state')->get();
            return Datatables::of($data)
                ->addIndexColumn()
                ->addColumn('state_name', function ($row) {
                    return $row->state->name ?? 'N/A';
                })
                ->addColumn('action', function ($row) {
                    $btn = '<a href="javascript:void(0)" class="btn btn-info btn-sm showcity" data-id="' . $row->id . '">View</a>';
                    $btn .= '<a href="javascript:void(0)" class="btn btn-primary btn-sm editcity" data-id="' . $row->id . '">Edit</a>';
                    $btn .= '<a href="javascript:void(0)" class="btn btn-danger btn-sm deletecity" data-id="' . $row->id . '">Delete</a>';
                    return $btn;
                })
                ->rawColumns(['action'])
                ->make(true);
        }

        $states = State::with('country')->get(); // Fetch states and their related countries
        return view('cities', compact('states'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'state_id' => 'required|exists:states,id',
        ]);

        City::updateOrCreate(
            ['id' => $request->city_id],
            [
                'name' => $request->name,
                'state_id' => $request->state_id,
            ]
        );

        return response()->json(['success' => 'City saved successfully.']);
    }

    public function edit($id)
    {
        $city = City::with('state')->find($id);
        return response()->json($city);
    }

    public function destroy($id)
    {
        City::find($id)->delete();
        return response()->json(['success' => 'City deleted successfully.']);
    }
    
    
    // public function index(Request $request)
    // {
    //     if ($request->ajax()) {
    //         $data = City::with('state'); // Eager load states

    //         return DataTables::of($data)
    //             ->addIndexColumn()
    //             ->addColumn('state_name', function ($row) {
    //                 return $row->state->name ?? 'N/A';
    //             })
    //             ->addColumn('action', function ($row) {
    //                 $btn = '<a href="javascript:void(0)" data-id="' . $row->id . '" class="btn btn-info btn-sm showcity">View</a>';
    //                 $btn .= ' <a href="javascript:void(0)" data-id="' . $row->id . '" class="btn btn-primary btn-sm editcity">Edit</a>';
    //                 $btn .= ' <a href="javascript:void(0)" data-id="' . $row->id . '" class="btn btn-danger btn-sm deletecity">Delete</a>';
    //                 return $btn;
    //             })
    //             ->rawColumns(['action'])
    //             ->make(true);
    //     }

    //     $states = State::all(); // Pass states to the view
    //     return view('cities', compact('states'));
    // }

    // public function store(Request $request)
    // {
    //     $request->validate([
    //         'name' => 'required',
    //         'state_id' => 'required|exists:states,id',
    //     ]);

    //     City::updateOrCreate(['id' => $request->city_id], $request->only('name', 'state_id'));

    //     return response()->json(['success' => 'city saved successfully.']);
    // }

    // public function show($id)
    // {
    //     $city = City::find($id);
    //     return response()->json($city);
    // }

    // public function edit($id)
    // {
    //     $city = City::find($id);
    //     return response()->json($city);
    // }

    // public function destroy($id)
    // {
    //     City::find($id)->delete();
    //     return response()->json(['success' => 'city deleted successfully.']);
    // }
   
 }
