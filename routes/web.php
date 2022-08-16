<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\AssociationController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\SearchController;
use App\Models\Association;
use Illuminate\Console\Scheduling\Event;
use Illuminate\Support\Str;

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
    Route::name('search')->prefix('search')->group(function () {
        Route::get('/', [SearchController::class, 'index']);

        Route::post('/', [SearchController::class, 'search']);
    });


    // ASSOCIATION
    Route::resource('association', AssociationController::class);
    Route::get('association/{association}/accept/{user}', [AssociationController::class, 'accept'])->name('association.accept');
    Route::get('association/{association}/decline/{user}', [AssociationController::class, 'decline'])->name('association.decline');
    Route::get('association/{association}/request', [AssociationController::class, 'request'])->name('association.request');
    Route::get('association/{association}/leave', [AssociationController::class, 'leave'])->name('association.leave');


    // EVENT
    Route::resource('event', EventController::class);


    Route::get('/logout', [UserController::class, 'logout'])->name('logout');
});
