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

/**
 * 
 */

Route::get('/', [UsuarioController::class,'index'])->name('index');
Route::get('/usuarios', [UsuarioController::class, 'usuariosIndex'])->name('usuarios-index');
Route::post('/usuarios', [UsuarioController::class, 'usuariosStore'])->name('usuario-store');
Route::delete('/usuarios/{id}',  [UsuarioController::class, 'eliminarUsuario'])->name('eliminarUsuario');


Route::get('/postsDeUsuario/{id}' , [UsuarioController::class, 'postsDeUsuario'])->name('postsDeUsuario');

Route::get('/asignar', [UsuarioController::class, 'showAsignar'])->name('show-asignar');
Route::post('/asignar', [UsuarioController::class, 'asignar'])->name('asignar');
Route::get('/direccion/{id}',  [UsuarioController::class, 'eliminarDireccion'])->name('eliminarDireccion');

Route::get('/direccion', function () {return view('direccion.crear');})->name('direccion-show');
Route::post('/direccion', [UsuarioController::class, 'storeDireccion'])->name('direccion-store');

Route::get('/posts', [UsuarioController::class, 'postsIndex'])->name('posts-index');
Route::post('/posts', [UsuarioController::class, 'storePosts'])->name('posts-store');
Route::delete('/posts/{id}',[UsuarioController::class , 'deletePost'])->name('delete-post');
Route::patch('/posts/{id}',[UsuarioController::class , 'updatePost'])->name('update-post');//NO ME DEJA METERLE PATCH
Route::get('/post/edit/{id}', [UsuarioController::class , 'editPost'])->name('edit-post');

Route::get('/temas',[UsuarioController::class , 'temaIndex'])->name('tema-index');
Route::post('/temas',[UsuarioController::class , 'storeTema'])->name('tema-store');

Route::get('/usersPosts',[UsuarioController::class, 'usersPostsIndex'])->name('usersPosts');








