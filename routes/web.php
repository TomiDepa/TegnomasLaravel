<?php

use App\Http\Controllers\AdministracionController;
use App\Http\Controllers\ArticulosController;
use App\Http\Controllers\ContactoController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\NosotrosController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ProductosController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

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



Route::resource('/',IndexController::class);

Route::resource('/nosotros',NosotrosController::class);

Route::resource('/articulos',ArticulosController::class);

Route::resource('/productos',ProductosController::class);

Route::resource('/contacto',ContactoController::class);

Auth::routes();

Route::resource('/administracion',AdministracionController::class);

Route::resource('/posts',PostController::class);



Route::resource('/admUsuario',UserController::class);