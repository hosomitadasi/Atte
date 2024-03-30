<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\EmailVerificationController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\WorkController;
use App\Http\Controllers\RestController;
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

Route::middleware('auth')->group(function () {
    Route::get('/logout', [UserController::class, 'getLogout']);

    Route::get('/', [WorkController::class, 'getIndex']);

    Route::get('/work/start', [WorkController::class, 'startwork']);
    Route::get('/work/end', [WorkController::class, 'endwork']);

    Route::get('/break/start', [RestController::class, 'startRest']);
    Route::get('/break/end', [RestController::class, 'endRest']);

    Route::get('/date/{num}', [WorkController::class, 'getwork']);
});

Route::get('/register', [UserController::class, 'getRegister']);
Route::post('/register', [UserController::class, 'postRegister']);

Route::get('/login', [UsesrController::class, 'getLogin'])->name('login');;
Route::post('/login', [UsesrController::class, 'postLogin']);

Route::controller(EmailVerificationController::class)
    ->prefix('email')->name('verification.')->group(function () {
        // 確認メール送信画面
        Route::get('verify', 'index')->name('notice');
        // 確認メール送信
        Route::post('verification-notification', 'notification')
        ->middleware('throttle:6,1')->name('send');
        // 確認メールリンクの検証
        Route::get('verification/{id}/{hash}', 'verification')
        ->middleware(['signed', 'throttle:6,1'])->name('verify');
    });