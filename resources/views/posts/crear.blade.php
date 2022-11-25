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

                <label for='tema'>Tema</label><br>
                <select name='tema'>
                    <option selected disabled="true">-select your topic</option>
                    <option value="1">Informática</option>
                    <option value="2">Ornitología</option> 
                    <option value="3">Manga</option> 
                    <option value="4">Filosofía Griega</option> 
                    <option value="5">Animales marinos</option>  
                </select><br>

                <label for='checkBoxTema' class = 'whiteSmoke labelCheckBox'>Selecciona Temas</label><br>
                <fieldset class='whiteSmoke' class = 'tema form-check' name ='checkBoxTema'>                               
                    <input type="checkbox" name="tema" value="Arte"><span class= 'checkLabel'>Arte</span><br>      
                    <input type="checkbox" name="tema" value="Alimentación"><span class= 'checkLabel'>Alimentación</span><br>      
                    <input type="checkbox" name="tema" value="Informática"><span class= 'checkLabel'>Informática</span><br> 
                    <input type="checkbox" name="tema" value="Coches"><span class= 'checkLabel'>Coches</span><br>
                    <input type="checkbox" name="tema" value="Informática"><span class= 'checkLabel'>Informática</span><br>   
                    <br>      
                </fieldset> 


                <input type ='text' name = 'titulo' class = 'lightRounded titulo' placeholder = 'Titulo'><br>
                    
                <textarea name="contenido" rows=5 cols="60"  placeholder="Contenido del post..." ></textarea><br>
                <input class="greyBlueBtn" type="submit" value="Post this">
        </form>
       
        <hr>
    <!------------------------------------------------------------>
        <h2>Todos los Posts realizados</h2>
        @if ($posts->count() == 0)
            <h4 class ='postsVacios'>No existen posts</h4>
        @endif
        @foreach( $posts as $post )
                <div class="postfield">
                    <h5 class='author'>{{$post->usuario->nombre}}</h5>
                    <div class="bubblePost">
                       
                        <div class='row'><span class = 'bubbleLabel'>Titulo: &nbsp</span><p class='textEdited'> {{$post->titulo}}</p></div>
                        <div class='row'><span class = 'bubbleLabel'>Temas: &nbsp
                            @foreach ($posts->temas as $tema)
                              </span><p class='textEdited'> {{$tema->tema}}</p>
                            @endforeach    
                        </div>
                        <span class = 'date'>{{$post->updated_at}}</span>
                        <p class = "postContent" >{{$post->contenido}}</p><br>  
                        <div class='row'>
                            <form action="{{route('edit-post', $post->id)}}" method="get">
                            @csrf
                                <input type = ' ' class ='crudBtn' value = 'Edit'>
                            </form>
                            <form action="{{route('delete-post', $post->id)}}" method="post">
                            @method('delete')
                            @csrf
                                <input type = 'submit' class ='crudBtn' value = 'Delete'>
                            </form>
                        </div>
                    </div>
                    
                </div>
        @endforeach
    </div>
@endsection