<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\WorkController;
use App\Http\Controllers\RestController;
use Illuminate\Foundation\Auth\EmailVerificationRequest;

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

    Route::get('/users.index', [UserController::class, 'index']);
    Route::get('/users/{userId}/attendance/{month}', [UserController::class, 'showMonthlyAttendance']);
});

Route::get('/register', [UserController::class, 'getRegister']);

Route::middleware(['auth'])->group(function () {
    Route::get('/email/verify', function () {
        return view('auth.verify-email');
    })->name('verification.notice');

    Route::get('/email/verify/{id}/{hash}', function (EmailVerificationRequest $request) {
        $request->fulfill();
        return redirect('/dashboard');
    })->middleware(['signed'])->name('verification.verify');

    Route::post('/email/verification-notification', function (Request $request) {
        $request->user()->sendEmailVerificationNotification();
        return back()->with('message', 'Verification link sent!');
    })->middleware(['throttle:6,1'])->name('verification.send');
});

Route::get('/login', [UserController::class, 'getLogin'])->name('login');
Route::post('/login', [UserController::class, 'postLogin']);