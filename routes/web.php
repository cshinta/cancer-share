<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\Auth\PasswordResetLinkController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Auth\NewPasswordController;

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

Route::post('/login', [AuthenticatedSessionController::class, 'store']);

Route::get('/forgot-password', function () {
    return view('auth.lupapassword');
});

Route::post('/forgot-password', [PasswordResetLinkController::class, 'store']);

Route::get('/dashboard', [ProfileController::class,'getDashboard']);

// Route::get('/mail', function () {
//     return view('page.mail');
// });

Route::get('/forum', function () {
    return view('forum.index');
});
Route::get('/donasi', function () {
    return view('page.donasi');
});
Route::get('/reset-password', [NewPasswordController::class,'getDataUser']);

Route::get('/reset-password', [NewPasswordController::class,'getDataUser']);

Route::post('/reset-password',  [NewPasswordController::class,'store']);

Route::get('/change-password',  [ProfileController::class,'getDataPassword']);

Route::post('/change-password',  [ProfileController::class,'updatePassword']);

Route::get('/register', function () {
    return view('auth.register');
});

Route::post('/register', [RegisteredUserController::class,'store']);


Route::get('/sunting-profil', [ProfileController::class,'getDataProfile']);

Route::post('/sunting-profil', [ProfileController::class,'update']);

Route::get('/lihat-profil', function () {
    return view('profile.lihatprofil');
});

Route::get('/baca-selengkapnya', function () {
    return view('forum.bacaselengkapnya');
});
Route::get('/logout', [AuthenticatedSessionController::class, 'destroy']);

require __DIR__ . '/auth.php';
