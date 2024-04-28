<?php

use App\Http\Controllers\MailSendController;
use Illuminate\Support\Facades\Route;
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

Route::middleware(['verified'])->group(function () {
    Route::get('/logout', [UserController::class, 'getLogout']);

    Route::get('/', [WorkController::class, 'getIndex']);

    Route::get('/work/start', [WorkController::class, 'startwork']);
    Route::get('/work/end', [WorkController::class, 'endwork']);

    Route::get('/break/start', [RestController::class, 'startRest']);
    Route::get('/break/end', [RestController::class, 'endRest']);

    Route::get('/date/{num}', [WorkController::class, 'getwork']);

    Route::get('/user', [WorkController::class, 'indexUser']);
    Route::get('/userdate/{id}', [WorkController::class, 'showUser'])->name('userdate');
});

Route::get('/register', [UserController::class, 'getRegister']);
Route::post('/register', [UserController::class, 'postRegister']);
Route::match(['get','post'], 'register/verify/{token}', 'Auth\RegisterController@verify');


Route::get('/login', [UserController::class, 'getLogin'])->name('login');;
Route::post('/login', [UserController::class, 'postLogin']);

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
