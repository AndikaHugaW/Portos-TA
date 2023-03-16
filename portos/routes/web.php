<?php

use App\Http\Controllers\SessionController;
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

Route::get('/sesi', [SessionController::class, 'masuk']);
Route::post('/sesi/login', [SessionController::class, 'login']);

Route::get('/sesi/register', [SessionController::class, 'register']);
Route::post('/sesi/create', [SessionController::class, 'create']);

Route::get('/home', function () {
    return view('/home');
});

Route::get('/', function () {
    return view('beranda');
  });

Route::get('/beranda', 'login@index');
// Route::get('/', function () {
//     return view('/masuk');
// });

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
Route::get('/loginadmin', function () {
    return view('loginadmin');
});
Route::get('/registeradmin', function () {
    return view('registeradmin');
});
Route::get('/admin', function () {
    return view('admin.master');
});

<<<<<<< HEAD
Route::get('/profile/edit', 'App\Http\Controllers\SessionController@edit');
Route::post('/update/{id}', 'App\Http\Controllers\SessionController@update')->name('update');


Route::get('/posting', function () {
    return view('/posting');
});

// Route::put('/profile/update', 'App\Http\Controllers\ProfileController@update')



Route::get('/detailporto', function () {
     return view('detailporto');
 });

 Route::post('/upload', 'UploadController@upload')->name('upload');


Route::get('/notification', function () {
  return view('notification');
});
=======
Route::get('/home', 'login@index');

Route::get('/home', 'login@index');
>>>>>>> 154b858e410a0a68065ff88511b016f49238415c
