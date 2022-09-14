<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\SalaryController;
use App\Http\Controllers\DataWorkerController;
use App\Http\Controllers\SecondPostController;
use App\Http\Controllers\PowerAndWeakController;
use App\Http\Controllers\PostCommunityController;
use App\Http\Controllers\InterestAndHopeController;
use App\Http\Controllers\HistoryEducationController;
use App\Http\Controllers\EducationNonFormalController;

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

    Route::get('login', [AuthController::class, 'formLogin'])->name('login');
    Route::post('login/send', [AuthController::class, 'login'])->name('send.login');

    Route::post('logout', [AuthController::class, 'logout'])->name('user.logout');
});

Route::middleware('auth')->group(function() {
    // ! Post Controller
    Route::resource('dashboard', PostController::class);
    // ! Second Post Controller
    Route::get('create/second/form', [SecondPostController::class, 'create']);
    Route::post('send/form', [SecondPostController::class, 'store']);

    Route::get('edit/second/form/{id}', [SecondPostController::class, 'edit']);
    Route::put('/send/form/{id}/edit', [SecondPostController::class, 'updateForm']);

    Route::delete('delete/{id}', [SecondPostController::class, 'destroy']);

    // History Education Controller
    Route::resource('education', HistoryEducationController::class);

    // History Education Non Formal Controller
    Route::resource('education/non/formal', EducationNonFormalController::class);

    // Data Worker Controller
    Route::resource('data/worker/', DataWorkerController::class);
    Route::get('/data/worker/{worker}/edit', [DataWorkerController::class, 'edit']);
    Route::put('/data/worker/{id}', [DataWorkerController::class, 'update']);
    Route::delete('/data/worker/{id}', [DataWorkerController::class, 'destroy']);

    // Post Community Controller
    Route::resource('community', PostCommunityController::class);

    // Minat dan Pekerjaan
    Route::resource('minat', InterestAndHopeController::class);

    //Power and Weaknes
    Route::resource('power/and/weak', PowerAndWeakController::class);

    //Salary
    Route::resource('salary', SalaryController::class);

});