<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\WorkController;
use App\Http\Controllers\RestController;

Route::middleware('auth')->group(function () {
    Route::get('/logout', [UserController::class, 'getLogout']);

    Route::get('/', [WorkController::class, 'getIndex']);

    Route::get('/work/start', [WorkController::class, 'startWork']);
    Route::get('/work/end', [WorkController::class, 'endWork']);

    Route::get('/break/start', [RestController::class, 'startRest']);
    Route::get('/break/end', [RestController::class, 'endRest']);

    Route::get('/work/{num}', [WorkController::class, 'getWork']);
});

Route::get('/register', [UserController::class, 'getRegister']);
Route::post('/register', [UserController::class, 'postRegister']);

Route::get('/login', [UserController::class, 'getLogin'])->name('login');;
Route::post('/login', [UserController::class, 'postLogin']);