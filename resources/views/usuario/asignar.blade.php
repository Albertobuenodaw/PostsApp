@extends('main')

@section('content')
<div class="container">
    <h1>Asignar Usuario</h1>
        <form action='{{route("asignar")}}' method='post'> 
            @csrf
            <select name="usuario">
                    @foreach ($usuarios as $usuario)
                    <option value="{{$usuario->id}}">{{$usuario->nombre}}</option>
                    @endforeach
            </select>

            <select name="direccion">
                @foreach ($direcciones as $direccion )
                <option value="{{$direccion->id}}">{{$direccion->calle}}</option>
                @endforeach
            </select><br>
            <input type=submit value="Asignar">
        </form>
        <hr>
        <table>
            <tr style="border:1px solid black;">
                <td >Nombre </td>
                <td>Apellido </td>
                <td> Direccion</td>
            </tr>
            @foreach ( $usuarios as $usuario)
                <tr>
                    <td> {{ $usuario->nombre }}</td>
                    <td> {{  $usuario->apellido}}</td>
                    @if (!empty($usuario->direccion->calle))
                        <td> {{  $usuario->direccion->calle}}</td>
                    @endif
                    
                </tr>
            @endforeach
        
        </table>
</div>
@endsection
