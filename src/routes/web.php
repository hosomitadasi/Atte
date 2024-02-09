<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\StampController;
use App\Http\Controllers\DateController;

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

Route::get('/register', [UsersController::class, 'create']);
Route::post('/register', [UsersController::class, 'store']);
Route::get('/login', [LoginController::class, 'store']);
Route::get('/stamp', [StampController::class, 'store']);
Route::get('/data', [DateController::class, 'index']);