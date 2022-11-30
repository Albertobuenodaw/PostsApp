<?php

namespace App\Http\Controllers;
use App\Models\Usuario;

//use Illuminate\Http\Request;

class ApiUserController extends Controller
{
    //
    function usuarioPostsIndex(Usuario $usuario){
        return $usuario->posts()::orderBy('titulo');
    }

    function twelveRecentPosts (Usuario $usuario){
        $posts = $usuario->posts();
        return $posts::latest()->take(5)->get();
    }


}
