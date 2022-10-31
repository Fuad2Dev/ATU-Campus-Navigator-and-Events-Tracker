<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\MapperController;
use App\Http\Controllers\AssociationController;
use App\Http\Controllers\DirectionController;
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

Route::get('/directions', function(){
    return view('directions');
});


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

    //MAP
    Route::get('/map/2d', [MapperController::class, '_2d'])->name('map.2d');
    Route::get('/map/3d', [MapperController::class, '_3d'])->name('map.3d');

    // HOME
    Route::get('/home', [HomeController::class, 'index'])->name('home');

    Route::resource('mapper', MapperController::class);

    // SEARCH
    Route::name('search')->prefix('search')->group(function () {
        Route::get('/', [SearchController::class, 'index']);

        Route::post('/', [SearchController::class, 'search']);
    });

    Route::get('/direction/2D/place/{place}', [DirectionController::class, '_2dPlace'])->name('direction.2d.place');
    Route::get('/direction/2D/block/{block}', [DirectionController::class, '_2dBlock'])->name('direction.2d.block');


    // ASSOCIATION
    Route::get('association/{association}/accept/{user}/request', [AssociationController::class, 'acceptRequest'])->name('association.request.accept');
    Route::get('association/{association}/cancel', [AssociationController::class, 'cancel'])->name('association.cancel');
    Route::get('association/{association}/decline/{user}', [AssociationController::class, 'decline'])->name('association.decline');
    Route::get('association/{association}/promote/{user}', [AssociationController::class, 'promote'])->name('association.promote');
    Route::get('association/{association}/demote/{user}', [AssociationController::class, 'demote'])->name('association.demote');
    Route::get('association/{association}/remove/{user}', [AssociationController::class, 'remove'])->name('association.remove');
    Route::get('association/{association}/request', [AssociationController::class, 'request'])->name('association.request');
    Route::get('association/{association}/leave', [AssociationController::class, 'leave'])->name('association.leave');
    Route::get('association/{association}/add', [AssociationController::class, 'add'])->name('association.add');
    Route::post('association/{association}/search', [AssociationController::class, 'search'])->name('association.search');
    Route::get('association/{association}/user/{user}/invite', [AssociationController::class, 'invite'])->name('association.invite');
    Route::get('association/{association}/invite/accept', [AssociationController::class, 'acceptInvite'])->name('association.invite.accept');
    
    Route::resource('association', AssociationController::class)->except([
        'index'
    ])->missing(function(){return redirect()->route('home');});
    // Route::get('association/{association}', [AssociationController::class, 'show'])->name('association.show');
    // Route::get('association/create', [AssociationController::class, 'create'])->name('association.create');
    // Route::get('association/{association}/edit', [AssociationController::class, 'edit'])->name('association.edit');
    // Route::put('association/{association}', [AssociationController::class, 'update'])->name('association.update');
    


    // EVENT
    Route::resource('association.event', EventController::class)->except(['index']);


    Route::get('/logout', [UserController::class, 'logout'])->name('logout');
});
