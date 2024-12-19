<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CityController;
use App\Http\Controllers\StateController;
use App\Http\Controllers\CountryController;
use App\Http\Controllers\LocationController;
use App\Http\Controllers\ProfileController;

Route::get('/', function () {
    return view('index');
});
Route::get('/form', function () {
    return view('basic_form');
})->name('form');

Route::get('/dashboard', function () {
    return view('dashboard');
// })->name('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::resource('countries', CountryController::class);
Route::resource('states',StateController::class);
Route::resource('cities', CityController::class);

Route::controller(LocationController::class)->group(function(){
    
   Route::get('/countries_list', 'countriesList' );
});

// Route::controller(LocationController::class)->group(function () {
//     // Country CRUD
//     Route::get('/countries', 'getCountries');
//     Route::post('/countries', 'storeCountry');
//     Route::put('/countries/{id}', 'updateCountry');
//     Route::delete('/countries/{id}', 'deleteCountry');

//     // State CRUD
//     Route::get('/states', 'getStates');
//     Route::post('/states', 'storeState');
//     Route::put('/states/{id}', 'updateState');
//     Route::delete('/states/{id}', 'deleteState');

//     // City CRUD
//     Route::get('/cities', 'getCities');
//     Route::post('/cities', 'storeCity');
//     Route::put('/cities/{id}', 'updateCity');
//     Route::delete('/cities/{id}', 'deleteCity');
// });
require __DIR__.'/auth.php';
