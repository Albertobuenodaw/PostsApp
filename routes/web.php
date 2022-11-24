<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsuarioController;


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
Route::get('/', function () {return view('index');});
Route::get('/usuarios', function(){return view ('usuario.crear');})->name( 'usuario' );
Route::post('/usuarios', [UsuarioController::class , 'store'])->name( 'usuario-store' );

Route::get('/asignar', [UsuarioController::class, 'showAsignar'])->name( 'show-asignar' );
Route::post('/asignar', [UsuarioController::class, 'asignar'])->name( 'asignar' );

Route::get('/direccion', function () {return view('direccion.crear');})->name('direccion-show');
Route::post('/direccion', [UsuarioController::class, 'storeDireccion'])->name('direccion-store');

Route::get('/posts', [UsuarioController::class, 'postsIndex'])->name('posts-index');
Route::post('/posts', [UsuarioController::class, 'storePosts'])->name('posts-store');
Route::delete('/posts/{id}',[UsuarioController::class , 'deletePost'])->name('delete-post');
Route::patch('/posts/{id}',[UsuarioController::class , 'updatePost'])->name('update-post');

Route::get('/usersPosts',[UsuarioController::class, 'usersPostsIndex'])->name('usersPosts');








