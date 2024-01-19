<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterdUserController;
use App\Http\Controllers\AuthenticatedSessionController;

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

Route::get('/', [RegisterdUserController::class, 'create']);
Route::get('/login', [AuthenticatedSessionController::class, 'store'])->route('login.blade.php');
