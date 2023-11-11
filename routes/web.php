<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\RolController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
//Rutas User
Route::post('/user_store', [UserController::class, 'store']);
Route::get('/user_index', [UserController::class, 'index']);

Route::get('/token', [UserController::class, 'token']);

//rutas Rol
Route::post('/rol_store', [RolController::class, 'store']);
Route::get('/rol_index', [RolController::class, 'index']);
