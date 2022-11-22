@extends('main')
@section ('content')
    <div class="container">
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
                <input class="button" type="submit" value="Post this">
        </form>
        <hr>
    <!------------------------------------------------------------>
            <h2>Posts realizados</h2>
            @if(empty($posts))

                <span class='warning'>No existen Posts aún</span>

            @endif

            @foreach( $posts as $post )

                    <h5 >{{$post->usuario->nombre}}</h5>
                    <p>{{$post->contenido}}</p>
                
            @endforeach
    </div>
@endsection