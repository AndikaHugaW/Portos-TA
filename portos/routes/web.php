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
// Route::get('/', function () {
//     return view('/masuk');
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

Route::put('/profile', [App\Http\Controllers\ProfileController::class, 'update'])->name('profile.update');


Route::get('/detailporto', function () {
     return view('detailporto');
 });

Route::get('/upload', function () {
    return view('upload');
});

// Route::get('/notification', function () {
//     return view('notification');
// });