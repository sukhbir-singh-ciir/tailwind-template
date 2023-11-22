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
    return view('home');
});
Route::get('/about', function () {
    return view('about');
});
Route::get('/componenets', function () {
    return view('componenets');
});
Route::get('/conatctUS', function () {
    return view('ContactUS');
});
Route::get('/blogs', function () {
    return view('blog');
});

<<<<<<< HEAD



Route::prefix('admin')->group(function () {
    Route::get('/', function () {
        return view('admin.dashboard');
    });
});
=======
Route::group(["prefix"=>"admin"],function(){
    Route::get('/', function () {
        return view('admin.dashboard');
    });
});

>>>>>>> 0e277b55cf4370b5e37d81bd31efa718f460f702
