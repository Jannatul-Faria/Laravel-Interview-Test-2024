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
})->name('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// Route::resource('countries', CountryController::class);
// Route::resource('states',StateController::class);
// Route::resource('cities', CityController::class);

Route::controller(LocationController::class)->group(function(){
    //country crud
   Route::get('/countries_list', 'countriesList' );
});
require __DIR__.'/auth.php';
