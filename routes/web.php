<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\MailController;
use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\Auth\PasswordResetLinkController;

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

Route::post('/login', 'AuthenticatedSessionController@store');

Route::get('/forgot-password', function () {
    return view('auth.lupapassword');
});

Route::post('/forgot-password', [PasswordResetLinkController::class, 'store']);

Route::get('/dashboard', function () {
    return view('profile.dashboard');
});

Route::get('/send-email',[MailController::class,'basic_email']);

// Route::get('/mail', function () {
//     return view('page.mail');
// });

Route::get('/forum', function () {
    return view('forum.index');
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

Route::post('/register', 'RegisteredUserController@store');


Route::get('/sunting-profil', function () {
    return view('auth.suntingprofil');
});

Route::get('/lihat-profil', function () {
    return view('profile.lihatprofil');
});

Route::get('/baca-selengkapnya', function () {
    return view('forum.bacaselengkapnya');
});

require __DIR__ . '/auth.php';
