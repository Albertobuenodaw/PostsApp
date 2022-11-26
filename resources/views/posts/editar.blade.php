@extends('main')
@section ('content')
    <div class = "container">
        <form class = 'form-group' action = '{{route("update-post", $post->id)}}' method = 'post'>
        @method('PATCH')
        @csrf
       <h2>{{ $post->usuario->nombre }}</h2>
            <input type ='text' name='titulo' class = 'lightRounded textEdited' value = '{{ $post->titulo }}'><br>
            <textarea name = "nuevoContenido"  rows = 5 cols = "60"  class= 'textEdited' >{{$post->contenido}}</textarea><br>
            <input class="greyBlueBtn" type = 'submit' value = 'Enviar'>
        </form>
    </div>
@endsection*