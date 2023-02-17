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
    return view('home');
});
Route::get('/login', function () {
    return view('login');
});
Route::get('/register', function () {
    return view('register');
});
// Route::get('/', function () {
//     return view('home');
// });
Route::get('/explore', function () {
    return view('explore');
});
Route::get('/profile', function () {
    return view('profile');
});
Route::get('/editprofile', function () {
    return view('editprofile');
});
Route::get('/detailporto', function () {
    return view('detailporto');
});
Route::get('/upload', function () {
    return view('upload');
});
Route::get('/notification', function () {
    return view('notification');
});

Route::get('/loginadmin', function () {
    return view('loginadmin');
});
Route::get('/registeradmin', function () {
    return view('registeradmin');
});

Route::get('/home', 'login@index');