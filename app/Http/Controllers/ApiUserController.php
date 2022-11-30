<?php

namespace App\Http\Controllers;
use App\Models\Usuario;
//use Illuminate\Http\Request;

class ApiUserController extends Controller
{
    //
    function usuariosIndex(Usuario $usuario){
        $usuario = Usuario::find($usuario);
        $posts = $usuario->posts()::orderBy('titulo');

        return $posts;
    }


}
