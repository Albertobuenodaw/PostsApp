@extends('main')
@section ('content')
    <div class="container mx-auto">
        <h1>Escribe tu Post</h1>
        <form action = '{{route('posts-store')}}' method = 'post'>
        @csrf
                <label for='usuario'>Selecciona tu usuario:</label><br>
                <select name='usuario'>
                <option selected disabled="true">-select your user</option>
                    @foreach($usuarios as $usuario)
                    <option value="{{$usuario->id}}">{{$usuario->nombre}}</option> 
                    @endforeach
                </select><br>
                <textarea name="contenido" rows=5 cols="60" style="resize:none; margin-top: 10px;" placeholder="Contenido del post..." ></textarea><br>
                <input class="darkBlueBtn" type="submit" value="Post this">
        </form>
       
        <hr>
    <!------------------------------------------------------------>
        <h2>Todos los Posts realizados</h2>
        @if ($posts->count() == 0)
            <h4 class ='postsVacios'>No existen posts</h4>
        @endif
        @foreach( $posts as $post )
                <div class="postfield">
                    <h5>{{$post->usuario->nombre}}</h5>
                    <div class="bubblePost">
                        <!--<span class = 'date'>{{$post->updated_at}}</span>-->
                        <!--<span class = 'categoria'>{{$post->updated_at}}</span>-->
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
                    
                </div>
        @endforeach
    </div>
@endsection