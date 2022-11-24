@extends('main')
@section ('content')
    <div class = "container">
        <form class = 'form-group' action = '{{route("update-post", $post->id)}}' method = 'post'>
        @method('PATCH')
        @csrf
            <h2>{{ $post->usuario->nombre }}</h2>
            <textarea name = "nuevoContenido"  rows = 5 cols = "60" style = "resize:none; margin-top: 10px;" >{{$post->contenido}}</textarea><br>
            <input class="grayBtn" type = 'submit' value = 'Enviar'>
        </form>
    </div>
@endsection