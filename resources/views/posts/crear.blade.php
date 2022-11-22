@extends('main')
@section ('content')
    <h2>Selecciona Usuario</h2>
    <form action = '{{route('posts-store')}}' method = 'post'>
    @csrf
            <select name='usuario'>
                @foreach($usuarios as $usuario)
                <option value="{{$usuario->id}}">{{$usuario->nombre}}</option> 
                @endforeach
            </select><br>
            <textarea name="contenido" rows=5 cols="60" style="resize:none" ></textarea><br>
            <input type="submit" value="Post this">
    </form>
    <hr>
    <h2>Posts realizados</h2>
    @if(empty($posts))
        <span class='warning'>No existen Posts aún</span>
    @endif
    @foreach( $posts as $post )
        <fieldset>
            <legend>{{$post->usuario()->nombre}}</legend>
            <p>{{$post->contenido}}</p>
        </fieldset>
    @endforeach
@endsection