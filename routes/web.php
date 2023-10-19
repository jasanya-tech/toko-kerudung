<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\ProductController;
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
    return view('landingPage');
})->name('landingpage');

Route::middleware(['auth'])->group(function () {
    Route::get('/product', [ProductController::class, 'index'])->name('product');
    Route::get('/logout', [AuthController::class, 'logout'])->name('logout');
});

Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/beranda', function () {
    return view('beranda');
})->name('beranda');

Route::middleware(['guest'])->group(function () {
    Route::get('/auth/login', [AuthController::class, 'login'])->name('auth.login');
    Route::post('/auth/login', [AuthController::class, 'loginProcess'])->name('auth.login.process');

    Route::get('/auth/register', [AuthController::class, 'register'])->name('auth.register');
    Route::post('/auth/register', [AuthController::class, 'registerProcess'])->name('auth.register.process');
});
