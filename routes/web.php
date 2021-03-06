<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\Auth\PasswordResetLinkController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Auth\NewPasswordController;
use App\Http\Controllers\ForumController;
use App\Http\Controllers\ReportController;

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

Route::get('/', [ForumController::class,'getDashboard']);

Route::get('/login', function () {
    return view('auth.login');
})->middleware('guest');

Route::post('/login', [AuthenticatedSessionController::class, 'store'])->middleware('guest');

Route::get('/forgot-password', function () {
    return view('auth.lupapassword');
})->middleware('guest');

Route::post('/forgot-password', [PasswordResetLinkController::class, 'store'])->middleware('guest');

Route::get('/dashboard', [ProfileController::class,'getDashboard'])->middleware(['auth']);

Route::get('/donasi', function () {
    return view('page.donasi');
});

Route::get('/edukasi/kankerparu', function () {
    return view('page.kankerparu');
});
Route::get('/edukasi/kankerhati', function () {
    return view('page.kankerhati');
});
Route::get('/edukasi/kankerdarah', function () {
    return view('page.kankerdarah');
});
Route::get('/edukasi/kankerusus', function () {
    return view('page.kankerusus');
});

Route::get('/berita', function () {
    return view('page.berita');
});

Route::get('/berita-lengkap', function () {
    return view('page.beritalengkap');
});

Route::get('/reset-password', [NewPasswordController::class,'getDataUser'])->middleware('guest');

Route::post('/reset-password',  [NewPasswordController::class,'store'])->middleware('guest');

Route::get('/forum', [ForumController::class,'getAllPosts']);

Route::get('/forum/filter/{filtertype}', [ForumController::class,'GetPostsByFilter']);


Route::get('/change-password',  [ProfileController::class,'getDataPassword'])->middleware(['auth']);

Route::post('/change-password',  [ProfileController::class,'updatePassword'])->middleware(['auth']);

Route::get('/register', function () {
    return view('auth.register');
})->middleware('guest');

Route::post('/register', [RegisteredUserController::class,'store'])->middleware('guest');

Route::get('/sunting-profil', [ProfileController::class,'getDataProfile'])->middleware(['auth']);

Route::post('/sunting-profil', [ProfileController::class,'update'])->middleware(['auth']);

Route::get('/lihat-profil', [ProfileController::class,'getProfilePage'])->middleware(['auth']);

Route::get('/forum/posts/{id}', [ForumController::class,'getPostByID']);

Route::get('/forum/my/posts/{id}', [ForumController::class,'getMyPostByID'])->middleware(['auth']);

Route::get('/logout', [AuthenticatedSessionController::class, 'destroy'])->middleware(['auth']);

Route::get('/tentang-kami', function () {
    return view('page.tentangkami');
});

Route::get('/upload-forum', function () {
    return view('forum.upload');
})->middleware(['auth']);

Route::get('/edit-forum/{id}', [ForumController::class,'UpdateView'])->middleware(['auth']);

Route::post('/edit-forum', [ForumController::class,'UpdatePost'])->middleware(['auth']);

Route::get('/delete/{postID}', [ForumController::class,'DeletePost'])->middleware(['auth']);

Route::post('/upload-forum', [ForumController::class,'CreatePost'])->middleware(['auth']);

Route::get('/report/{postID}', [ReportController::class,'showReport'])->middleware(['auth']);

Route::post('/report', [ReportController::class,'createReport'])->middleware(['auth']);

require __DIR__ . '/auth.php';
