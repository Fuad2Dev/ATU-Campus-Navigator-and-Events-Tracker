<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;

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

Route::middleware('auth')->group(function () {

    Route::get('/home', function () {
        return view('home');
    })->name('home');

    Route::get('/search', function () {
        return view('search');
    })->name('search');

    Route::get('/association/{id}/show', function () {
        return view('association.show');
    })->name('association.show');

    Route::get('/association/create', function () {
        return view('association.create');
    })->name('association.create');

    Route::get('/association/{id}/edit', function () {
        return view('association.edit');
    })->name('association.edit');

    Route::get('/event/create', function () {
        return view('event.create');
    })->name('event.create');

    Route::get('/logout', [UserController::class, 'logout'])->name('logout');
});
