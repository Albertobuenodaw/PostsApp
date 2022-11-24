@extends('main')
@section ('content')
    <div class="container mx-auto">
        <h2>Escribe tu Post</h2>
        <form action = '{{route('posts-store')}}' method = 'post'>
        @csrf
                <label for='usuario'>Selecciona tu usuario:</label><br>
                <select name='usuario'>
                    @foreach($usuarios as $usuario)
                    <option value="{{$usuario->id}}">{{$usuario->nombre}}</option> 
                    @endforeach
                </select><br>
                <textarea name="contenido" rows=5 cols="60" style="resize:none; margin-top: 10px;" ></textarea><br>
                <input class="blueButton" type="submit" value="Post this">
        </form>
        <form action='{{route('usersPosts')}}' method='get' >
        <input type='submit' value= 'Ver posts por usuario' class="darkBlueBtn" style = 'margin-top:12px;'>
        </form>
        <hr>
    <!------------------------------------------------------------>
        <h2>Todos los Posts realizados</h2>
        @foreach( $posts as $post )
                <div class="postfield">
                    <h5>{{$post->usuario->nombre}}</h5>
                    <p class = "postContent" >{{$post->contenido}}</p><br>
                    <div class='row'>
                        <form action="{{route('edit-post', $post->id)}}" method="get">
                        @csrf
                            <input type = 'submit' class ='editBtn' value = 'Edit'>
                        </form>
                        <form action="{{route('delete-post', $post->id)}}" method="post">
                        @method('delete')
                        @csrf
                            <input type = 'submit' class ='deleteBtn' value = 'Delete'>
                        </form>
                    </div>
                    
                </div>
        @endforeach
    </div>
@endsection