<?php

namespace App\Http\Controllers;

use App\Models\City;
use App\Models\State;
use App\Models\Country;
use Illuminate\Http\Request;

class LocationController extends Controller
{

    // Country CRUD
    public function getCountries()
    {
        return response()->json(Country::with('states')->get());
    }

    public function storeCountry(Request $request)
    {
        $request->validate(['countryName' => 'required|string|max:255']);
        $country = Country::create($request->all());
        return response()->json(['success' => true, 'country' => $country]);
    }

    public function updateCountry(Request $request, $id)
    {
        $request->validate(['countryName' => 'required|string|max:255']);
        $country = Country::findOrFail($id);
        $country->update($request->all());
        return response()->json(['success' => true, 'country' => $country]);
    }

    public function deleteCountry($id)
    {
        Country::destroy($id);
        return response()->json(['success' => true]);
    }

    // State CRUD
    public function getStates()
    {
        return response()->json(State::with('country', 'cities')->get());
    }

    public function storeState(Request $request)
    {
        $request->validate(['stateName' => 'required', 'country_id' => 'required|exists:countries,id']);
        $state = State::create($request->all());
        return response()->json(['success' => true, 'state' => $state]);
    }

    public function updateState(Request $request, $id)
    {
        $request->validate(['stateName' => 'required', 'country_id' => 'required|exists:countries,id']);
        $state = State::findOrFail($id);
        $state->update($request->all());
        return response()->json(['success' => true, 'state' => $state]);
    }

    public function deleteState($id)
    {
        State::destroy($id);
        return response()->json(['success' => true]);
    }

    // City CRUD
    public function getCities()
    {
        return response()->json(City::with('state')->get());
    }

    public function storeCity(Request $request)
    {
        $request->validate(['cityName' => 'required', 'state_id' => 'required|exists:states,id']);
        $city = City::create($request->all());
        return response()->json(['success' => true, 'city' => $city]);
    }

    public function updateCity(Request $request, $id)
    {
        $request->validate(['cityName' => 'required', 'state_id' => 'required|exists:states,id']);
        $city = City::findOrFail($id);
        $city->update($request->all());
        return response()->json(['success' => true, 'city' => $city]);
    }

    public function deleteCity($id)
    {
        City::destroy($id);
        return response()->json(['success' => true]);
    }
}

