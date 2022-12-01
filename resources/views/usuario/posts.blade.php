@extends('main')

@section('content')
    @if ($usuario->posts->count() == 0)
            <h4 class ='postsVacios'>No existen posts para {{$usuario->nombre}}</h4>
    @endif
    @foreach($usuario->posts as $post)
    <div class="postfield">
            <h5 class='author'>{{$post->usuario->nombre}}</h5>
            <div class="bubblePost"> 
                <div class='row'><span class = 'bubbleLabel'>Titulo: &nbsp</span><p class='textEdited'> {{$post->titulo}}</p></div>
                    <div class='row'><span class = 'bubbleLabel'>Temas: &nbsp
                        @foreach ($post->temas as $tema)
                        </span><p class='textEdited'> {{$tema->nombre}}</p>
                        @endforeach    
                    </div>
                    <span class = 'date'>{{$post->updated_at}}</span>
                    <p class = "postContent" >{{$post->contenido}}</p><br>  
                    <div class='crudButtons row'>
                        <form action="{{route('edit-post', $post->id)}}" method="get">
                        @csrf
                            <input type = 'submit' class ='crudBtn' value = 'Edit'>
                        </form>
                        <form action="{{route('delete-post', $post->id)}}" method="post">
                        @method('delete')
                        @csrf
                            <input type = 'submit' class ='crudBtn' value = 'Delete'>
                        </form>
                    </div>
                </div>
            </div>
    </div>
    @endforeach
@endsection