<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\RolController;
use App\Http\Controllers\LocationController;
use App\Http\Controllers\ReviewController;
use App\Http\Controllers\UserLocationController;
use App\Http\Controllers\CategoryController;

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

//Rutas User
Route::post('/user_store', [UserController::class, 'store']);
Route::get('/user_index', [UserController::class, 'index']);

//rutas Rol
Route::post('/rol_store', [RolController::class, 'store']);
Route::get('/rol_index', [RolController::class, 'index']);

//Rutas Location
Route::post('/loc_store', [LocationController::class, 'store']);
Route::get('/loc_index', [LocationController::class, 'index']);

//Rutas Review
Route::post('rev_store', [ReviewController::class, 'store']);
Route::get('rev_index', [ReviewController::class, 'index']);

//Rutas user Location
Route::post('usLoc_store', [UserLocationController::class, 'store']);
Route::get('usLoc_index', [UserLocationController::class, 'index']);

//Rutas Category
Route::post('cat_store', [CategoryController::class, 'store']);
Route::get('cat_index', [CategoryController::class, 'index']);

