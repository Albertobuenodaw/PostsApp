<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Usuario;
use App\Models\Direccion;
use App\Models\Post;

class UsuarioController extends Controller
{
   
    public function index()
    {
        //
    }
   
    public function create()
    {
        //
    }
   
    public function store(Request $request)
    {   
        $usuario = new Usuario;
        $usuario->nombre= $request->nombre;
        $usuario->apellido= $request->apellido;
        $usuario->save();
        return redirect()->route('usuario-store');
    }
    
 
    public function storeDireccion(Request $request)
    {   
        $direccion = new Direccion;
        $direccion->calle= $request->calle;
        $direccion->numero= $request->numero;
        $direccion->codPostal= $request->codPostal;
        $direccion->municipio= $request->municipio;
        $direccion->save();
        return redirect()->route('direccion-store');
    }

    
    public function show($id)
    {
        
    }

    
    public function edit($id){

    }
     
    public function update(Request $request, $id)
    {
        
    }
   
    public function destroy($id)
    {
        
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

    public function storePosts(Request $request){
        $id_usuario = $request->get('usuario');
        $request->get('contenido');    
        $usuario =  Usuario::find($id_usuario);

        $post = New Post();
        $post->contenido = $request->get('contenido');
        $post->titulo = $request->get('titulo');

        $usuario->posts()->save($post);
        return redirect()->route('posts-store');
        
    }

    public function usersPostsIndex(){
        $usuarios = Usuario::all();
        $posts = Post::all();
        return view('posts.usuarios')->with('usuarios',$usuarios)->with('posts', $posts);
    }

    public function deletePost($id){
        $post = Post::findOrFail($id);
        $post->delete();

        return redirect()->route('posts-store');
    }

    public function updatePost(Request $request, $id){
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
