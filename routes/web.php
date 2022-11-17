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

Route::get('/usuario/crear', function () {
    return view('usuario.crear');
});
Route::post('/usuario/crear', [UsuarioController::class, 'store']);
Route::get('/direccion/crear', function () {
    return view('direccion.crear');
});
Route::post('/direccion/crear', [DireccionController::class, 'store']);
Route::get('/', function () {
    return view('index');
});

