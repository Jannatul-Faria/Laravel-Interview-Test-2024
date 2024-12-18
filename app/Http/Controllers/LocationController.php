<?php

namespace App\Http\Controllers;

use App\Models\Country;
use Illuminate\Http\Request;

class LocationController extends Controller
{
    public function countriesList(){
        return response()->json(Country::with('states')->get());
    }
}
