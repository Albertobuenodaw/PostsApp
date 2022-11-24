@extends('main')

@section('content')
<div class="container ">
    <h1>Asignar dirección a Usuario</h1>
        <form action='{{route("asignar")}}' method='post'> 
            @csrf 
            <div class='row'>
          
                    <select name="usuario" class="col-md-5 form-select">
                            <option selected disabled="true">Open this select menu</option>
                            @foreach ($usuarios as $usuario)
                            <option value="{{$usuario->id}}">{{$usuario->nombre}}</option>
                            @endforeach
                    </select>
           
                
               
                    <select name="direccion" class="col-md-5 ml-5 form-select" >
                        <option selected disabled="true">Open this select menu</option>
                        @foreach ($direcciones as $direccion )
                        <option value="{{$direccion->id}}">{{$direccion->calle}}</option>
                        @endforeach
                    </select>
                
            </div>
            <br>
            <input class = 'blueButton col-md-12' type=submit value="Asignar">
        </form>
        <hr>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col" >Nombre </th>
                    <th scope="col">Apellido </th>
                    <th scope="col"> Direccion</th>
                    <th scope="col"> Action</th>
                </tr>
            </thead>
            <tbody>
            @foreach ( $usuarios as $usuario)
                <tr>
                    <td> {{ $usuario->nombre }}</td>
                    <td> {{  $usuario->apellido}}</td>
                    <td>
                    @if (!empty($usuario->direccion->calle))
                         {{  $usuario->direccion->calle}}
                    @endif
                    </td>
                    <td>
                        <input type="submit" class="grayBtn" value="Ver Posts">
                    </td>
                    
                </tr>
            @endforeach
            </tbody>
        
        </table>
</div>
@endsection
