<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\arimaController;


// Route::get('/', function () {
//     return view('pages/input');
// });


Route::get('/', [arimaController::class, 'inputForm']);
Route::post('/proses', [arimaController::class, 'proses']);
