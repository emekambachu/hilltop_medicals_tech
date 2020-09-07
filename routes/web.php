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

Route::get('/', static function () {
    return view('home');
});

Route::get('services', static function () {
    return view('services');
});

Route::get('products', static function () {
    return view('products');
});

Route::get('about', static function () {
    return view('about');
});

Route::get('contact', static function () {
    return view('contact');
});