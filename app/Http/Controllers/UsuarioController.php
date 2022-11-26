<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Usuario;
use App\Models\Direccion;
use App\Models\Post;
use App\Models\Tema;


class UsuarioController extends Controller
{
   
    public function index()
    {
      return view ('index');
    }

    public function usuariosIndex()
    {
        return view ('usuario.crear');
    }

    public function usuariosStore(Request $request)
    {   
        $usuario = new Usuario;
        $usuario->nombre= $request->nombre;
        $usuario->apellido= $request->apellido;

        $usuario->save();

        return redirect()->route('usuario-store')->with('message','Success!');
    }
    
    public function storeDireccion(Request $request)
    {   
        $direccion = new Direccion;
        $direccion->calle= $request->calle;
        $direccion->numero= $request->numero;
        $direccion->codPostal= $request->codPostal;
        $direccion->municipio= $request->municipio;

        $direccion->save();

        return redirect()->route('direccion-store')->with('message','Success!');
    }

    public function showAsignar()
    {   
        $usuarios = Usuario::all();
        $direcciones = Direccion::all();

        return view('usuario.asignar')->with('usuarios',$usuarios)->with('direcciones', $direcciones);
        //
    }

    public function asignar(Request $request)
    {   
        $id_usuario = $request->get('usuario');
        $id_direccion = $request->get('direccion');

        $usuario =  Usuario::find($id_usuario);
        $direccion = Direccion::find($id_direccion);

        $usuario->direccion()->save($direccion); //SAVE

        return redirect()->route('asignar');
    }

    public function postsIndex()
    {   
        $usuarios = Usuario::all();
        $posts = Post::all();

        return view('posts.crear')->with('usuarios',$usuarios)->with('posts', $posts);
    }

    public function postsDeUsuario($id)
    {
        $usuario = Usuario::findOrFail($id);
        return view('usuario.posts')->with('usuario',$usuario);
    }

    //pDTE corregir storePosts
    public function storePosts(Request $request)
    {
        $id_usuario = $request->get('usuario');
        $request->get('contenido');    
        $usuario =  Usuario::find($id_usuario);

        $post = New Post();
        $post->contenido = $request->get('contenido');
        $post->titulo = $request->get('titulo');
        
        $usuario->posts()->save($post);

        $post->temas()->attach($request->get('tema_id'));

        return redirect()->route('posts-store');    
    }

    public function eliminarDireccion($id){
        $usuario =  Usuario::find($id);
        $usuario->direccion()->delete('idUsuario');

        return redirect()->route('asignar');
    }

    public function eliminarUsuario($id){
        $usuario =  Usuario::find($id);
        $usuario->delete();

        return redirect()->route('asignar');
    }

    public function usersPostsIndex()
    {
        $usuarios = Usuario::all();
        $posts = Post::all();

        return view('posts.usuarios')->with('usuarios',$usuarios)->with('posts', $posts);
    }

    public function deletePost($id)
    {
        $post = Post::findOrFail($id);
        $post->delete();

        return redirect()->route('posts-store');
    }

    public function updatePost(Request $request, $id)
    {
        $post = Post::findOrFail($id);
        $post->contenido = $request->get('nuevoContenido');
        $post->titulo = $request->get('titulo');
        $post->save();

        return redirect()->route('posts-store');
    }

    public function editPost($id){
        $post = Post::findOrFail($id);
        
        return view ('posts.editar')->with('post' , $post);
    }
}
