@extends('main')

@section('content')
<h1>Asignar Usuario</h1>
    <form action=# method=''> 
        @csrf
        <select>
                @foreach ($usuarios as $usuario)
                <option>{{$usuario->name}}</option>
                @endforeach
        </select>

        <select>
            @foreach ($direcciones as $direccion )
            <option>{{$direccion->name}}</option>
            @endforeach
        </select>

        <submit>
    </form>
@endsection
