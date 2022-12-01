<?php

namespace App\Http\Controllers;
use App\Models\Usuario;
use App\Models\Post;

//use Illuminate\Http\Request;

class ApiUserController extends Controller
{
    //
    function usuarioPostsIndex(Usuario $usuario){
        return Post::find($usuario);
    }

  

}
