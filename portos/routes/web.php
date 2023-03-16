<?php

use App\Http\Controllers\SessionController;
use App\Models\JudulPortos;
use Illuminate\Support\Facades\Auth;
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

Route::group(["prefix" => "/sesi"],function () {
    Route::get('/', [SessionController::class, '']);
    Route::post('/login', [SessionController::class, 'login']);
    
    Route::get('/register', [SessionController::class, 'register']);
    Route::post('/create', [SessionController::class, 'create']);
});



Route::get('/', function () {
    return view('beranda');
  });

Route::get('/beranda', 'login@index');
// Route::get('/', function () {
//     return view('/masuk');
// });
Route::get('/home', function () {
    return view('home');
});

Route::get('/explore', function () {
return view('explore');
    });

// Route::get('/profile', function () {
//     return view('profile');
// });

Route::get('/profile', 'App\Http\Controllers\SessionController@index')->name('profile');

Route::get('/editprofile', function () {
    return view('update');
});

Route::get('/profile/edit', 'App\Http\Controllers\SessionController@edit');
Route::post('/update/{id}', 'App\Http\Controllers\SessionController@update')->name('update');

Route::post('/judul_portos', 'App\Http\Controllers\JudulController@store')->name('judul_portos.store');


Route::get('/posting', function () {
    return view('/posting');
});

// Route::put('/profile/update', 'App\Http\Controllers\ProfileController@update')



Route::get('/detailporto/{id}', function ($id) {
    $users = Auth::user();
    $judul_portos = JudulPortos::find($id);
     return view('detailporto', compact(['users','judul_portos']));
 });

 Route::post('/upload', 'UploadController@upload')->name('upload');


Route::get('/notification', function () {
  return view('notification');
});