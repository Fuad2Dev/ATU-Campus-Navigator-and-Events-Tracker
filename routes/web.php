<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

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

Route::get('/', [AuthController::class, 'login']);

Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::get('/register', [AuthController::class, 'register'])->name('register');

Route::get('/home', function () {
    return view('home');
})->name('home');

Route::get('/search', function () {
    return view('search');
})->name('search');

Route::post('/home', function () {
    return view('home');
})->name('home');

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
