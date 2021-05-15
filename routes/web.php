<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\AuthenticatedSessionController;

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
    return view('welcome');
});

Route::get('/login', function () {
    return view('auth.login');
});

Route::get('/forgot-password', function () {
    return view('auth.lupapassword');
});

Route::post('/login', 'AuthenticatedSessionController@store');

Route::get('/dashboard', function () {
    return view('profile.dashboard');
});

Route::get('/reset-password', function () {
    return view('auth.resetpassword');
});

Route::get('/change-password', function () {
    return view('auth.ubahpassword');
});

Route::get('/register', function () {
    return view('auth.register');
});
Route::get('/sunting-profil', function () {
    return view('auth.suntingprofil');
});

Route::get('/lihat-profil', function () {
    return view('profile.lihatprofil');
});

require __DIR__.'/auth.php';



