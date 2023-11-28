<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;

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

Route::group(["prefix" => "admin"], function () {
    Route::get('/', 'AdminController@dashboard')->name('admin.dashboard');
    Route::get('/products', 'AdminController@products')->name('admin.products');
    Route::get('/pages', 'AdminController@pages')->name('admin.pages');
    Route::get('/pages/create', 'AdminController@createPage')->name('admin.pages.create');
    Route::get('/pages/edit/{id}', 'AdminController@editPage')->name('admin.pages.edit');
    Route::get('/blog', 'AdminController@blogs')->name('admin.blogs');
    Route::get('/blog/create', 'AdminController@createBlog')->name('admin.blogs.create');
    Route::get('/blog/edit/{id}', 'AdminController@editBlog')->name('admin.blogs.edit');
    Route::get('/settings', 'AdminController@settings')->name('admin.settings');
    Route::get('/users', 'AdminController@users')->name('admin.users');
    Route::get('/users/create', 'AdminController@createUser')->name('admin.users.create');
    Route::get('/users/edit/{id}', 'AdminController@editUser')->name('admin.users.edit');
});

