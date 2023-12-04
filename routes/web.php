<?php

use App\Http\Controllers\AdministracionController;
use App\Http\Controllers\ArticulosController;
use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\ComentarioController;
use App\Http\Controllers\ContactoController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\NosotrosController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ProductosController;
use App\Http\Controllers\RolController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Auth;
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

Auth::routes();

Route::resource('/',IndexController::class);
Route::resource('/nosotros',NosotrosController::class);
Route::resource('/articulos',ArticulosController::class);
Route::resource('/productos',ProductosController::class);
Route::resource('/contacto',ContactoController::class);
Route::resource('/administracion',AdministracionController::class)->middleware('rol:Admin,Editor');
Route::resource('/posts',PostController::class)->middleware('rol:Admin,Editor');
Route::get('/posts/{post}', 'App\Http\Controllers\PostController@show')->name('posts.show');
Route::resource('/users',UserController::class)->middleware('auth');
Route::get('/users/{user}', 'App\Http\Controllers\UserController@show')->name('users.show');
Route::resource('/rols', RolController::class)->middleware('rol:Admin');
Route::resource('/categorias', CategoriaController::class)->middleware('rol:Admin,Editor');
Route::post('/comentarios', [ComentarioController::class, 'store'])->name('comentario.store');



