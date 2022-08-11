<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\AssociationController;
use App\Http\Controllers\HomeController;

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


Route::middleware('guest')->group(function () {

    Route::get('/', function () {
        return redirect()->route('login');
    });

    Route::get('/login', function () {
        return view('auth.login');
    })->name('login');

    Route::get('/register', [UserController::class, 'create'])->name('user.register');


    Route::post('/login', [UserController::class, 'login'])->name('user.login');
    Route::post('/register', [UserController::class, 'store'])->name('user.register');
});

// // // // // // // // // // // // // //

Route::middleware('auth')->group(function () {

    // HOME
    Route::get('/home', [HomeController::class, 'index'])->name('home');


    // SEARCH
    Route::prefix('search')->group(function () {
        Route::get('/', function () {
            return view('search');
        })->name('search');

        Route::post('/', function () {
            dd(request());
        })->name('search');
    });

    // ASSOCIATION
    Route::resource('association', AssociationController::class);

    // EVENT
    Route::resource('event', EventController::class);


    Route::get('/logout', [UserController::class, 'logout'])->name('logout');
});
