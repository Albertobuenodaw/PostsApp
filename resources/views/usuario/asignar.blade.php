@extends('main')

@section('content')

<h1>Asignar Usuario</h1>
    <form action='{{route("asignar")}}' method='post'> 
        @csrf
        <select>
                @foreach ($usuarios as $usuario)
                <option>{{$usuario->nombre}}</option>
                @endforeach
        </select>

        <select>
            @foreach ($direcciones as $direccion )
            <option>{{$direccion->calle}}</option>
            @endforeach
        </select><br>

        <input type=submit value="Asignar">
    </form>
@endsection
