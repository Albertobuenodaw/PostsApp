<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsuarioController;
use App\Http\Controllers\DireccionController;

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
Route::get('/usuarios', function(){return view ('usuario.crear');})->name('usuario');
Route::post('/usuarios', [UsuarioController::class , 'store'])->name('usuario-store');

Route::get('/asignar', [UsuarioController::class, 'showAsignar']);

Route::get('/direccion/crear', function () {return view('direccion.crear');});
Route::post('/direccion/crear', [DireccionController::class, 'store']);





