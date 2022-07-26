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

Route::get('/', function () {
    return view('profile');
});

Route::get('/about', function () {
    return view('about', [
        "name" => "Rafi",
        "email" => "muhammadrafi.2020@student.uny.ac.id",
        "image" => "img.jfif"
    ]);
});

Route::get('/blog', function () {
    return view('posts');
});