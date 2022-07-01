<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

if (config('coming-soon.enabled')) {
    Route::get('/coming-soon', function () {
        return view('laravel-coming-soon::coming-soon');
    })->name('laravel-coming-soon.coming-soon');
}
