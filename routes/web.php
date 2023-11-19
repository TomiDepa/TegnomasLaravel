<?php

use App\Http\Controllers\ArticulosController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\NosotrosController;
use App\Http\Controllers\ProductosController;
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

Route::get('/', function () {
    return view('welcome');
});
 
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::resource('/index',IndexController::class);

Route::resource('/nosotros',NosotrosController::class);

Route::resource('/articulos',ArticulosController::class);

Route::resource('/productos',ProductosController::class);

Route::resource('/contacto',ContactoController::class);

