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
    return view('Home',[
        "tittle" => "Home"
    ]);
});

Route::get('/about', function () {
    return view('About', [
        "tittle" => "About",
        "name" => "Gigih D Saputra",
        "email" => "gigihdsaputra@gmailcom",
        "image" => "potato.png"
    ]);
});
Route::get('/blog', function () {
    return view('Posts',[
        "tittle" => "Posts"
    ]);
});
