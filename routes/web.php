<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\PostController;

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
Route::get('/', [AuthController::class, 'index']);
Route::prefix('auth')->group(function() {
    Route::get('register', [AuthController::class, 'formRegis']);
    Route::post('register/send', [AuthController::class, 'sendRegis'])->name('send.regis');

    Route::get('login', [AuthController::class, 'formLogin']);
    Route::post('login/send', [AuthController::class, 'login'])->name('send.login');

    Route::post('logout', [AuthController::class, 'logout'])->name('user.logout');
});

Route::middleware('auth')->group(function() {
    Route::resource('dashboard', PostController::class);
});