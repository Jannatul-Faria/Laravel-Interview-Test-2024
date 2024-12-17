<?php

use Illuminate\Support\Facades\Route;

// Route::get('/{page?}', function ($page = null) {
//     $page = $page ?? 'index.blade.php';

//     $path = public_path("index.blade.php");

//     if (File::exists($path)) {
//         return response()->file($path);
//     }

//     abort(404);
// });
Route::view('/', 'index');
