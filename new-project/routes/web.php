<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::post('/my-route', function () {
    return "view('welcome')";
});

Route::post('/check_number', [\App\Http\Controllers\MyController::class, 'check_number']);

Route::post('/check_csv', [\App\Http\Controllers\MyController::class, 'check_csv']);