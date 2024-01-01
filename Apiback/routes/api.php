<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\v1\PlacesController;
use App\Http\Controllers\Api\v1\ItemsController;
use App\Http\Controllers\Api\v1\rolesController;
use App\Http\Controllers\Api\v1\usersController;

/*
|--------------------------------------------------------------------------
| API configuration to CORS policy 
|--------------------------------------------------------------------------
|
*/
header("Access-Control-Allow-Origin: *");
header('Access-Control-Allow-Methods: POST,GET,PUT,PATCH,DELETE,OPTIONS');
header('Access-Control-Allow-Headers: Origin, X-Requested-With, Content-Type, Accept');



/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


Route::group(['prefix' => 'places'], function () {
    Route::get('index', [PlacesController::class, 'index'])->name('api.index.places');
    Route::get('/show/{id}', [PlacesController::class, 'show'])->name('api.show.places');
    Route::post('/store', [PlacesController::class, 'store'])->name('api.store.places');
    Route::put('/update/{id}', [PlacesController::class, 'update'])->name('api.update.places');
    Route::delete('/destroy/{id}', [PlacesController::class, 'destroy'])->name('api.destroy.places');
});

Route::group(['prefix' => 'items'], function () {
    Route::get('index', [ItemsController::class, 'index'])->name('api.index.items');
    Route::get('/show/{id}', [ItemsController::class, 'show'])->name('api.show.items');
    Route::post('/store', [ItemsController::class, 'store'])->name('api.store.items');
    Route::put('/update/{id}', [ItemsController::class, 'update'])->name('api.update.items');
    Route::delete('/destroy/{id}', [ItemsController::class, 'destroy'])->name('api.destroy.items');
});

Route::group(['prefix' => 'roles'], function () {
    Route::get('index', [rolesController::class, 'index'])->name('api.index.roles');
    Route::get('/show/{id}', [rolesController::class, 'show'])->name('api.show.roles');
    Route::post('/store', [rolesController::class, 'store'])->name('api.store.roles');
    Route::put('/update/{id}', [rolesController::class, 'update'])->name('api.update.roles');
    Route::delete('/destroy/{id}', [rolesController::class, 'destroy'])->name('api.destroy.roles');
});

Route::group(['prefix' => 'users'], function () {
    Route::get('index', [usersController::class, 'index'])->name('api.index.users');
    Route::get('/show/{id}', [usersController::class, 'show'])->name('api.show.users');
    Route::post('/store', [usersController::class, 'store'])->name('api.store.users');
    Route::put('/update/{id}', [usersController::class, 'update'])->name('api.update.users');
    Route::delete('/destroy/{id}', [usersController::class, 'destroy'])->name('api.destroy.users');
});