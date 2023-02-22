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

Route::get('/home', function () {
    $greet = 'Hello World';
    $cities = ['Londra', 'Parigi', 'Berlino'];

    return view('home', compact('greet', 'cities'));
})->name('home');


Route::get('/city/{index}', function ($index) {
    $cities = ['Londra', ' Parigi', 'Berlino'];

    $city = $cities[$index];
    return view('city', compact('city'));
})->name('city');
