@extends('main')

@section('content')
        <div class="container ">
                <div class = 'row'>
                    <h1 class = 'text-center'>Asignar dirección a Usuario</h1>
                </div>
                <form action='{{route("asignar")}}' method='post'> 
                @csrf 
                        <div class='row selects'>
                            <select name="usuario" class="col-md-5 form-select">
                                <option selected disabled="true">--selecciona un Usuario para asignar</option>
                                @foreach ($usuarios as $usuario)
                                <option value="{{$usuario->id}}">{{$usuario->nombre}}</option>
                                @endforeach
                            </select>
                            <div class='col-md-2'></div>
                            <select name="direccion" class="col-md-5 form-select" >
                                <option selected disabled="true">--selecciona una Direccion para asignar</option>
                                @foreach ($direcciones as $direccion )
                                <option value="{{$direccion->id}}">{{$direccion->calle}}</option>
                                @endforeach
                            </select>
                        </div>
                        <br>
                        <input class = 'greyBlueBtn col-md-12' type=submit value="Asignar">
                    </form>
            <hr>
            <div class = 'row'>
           
                <table class="table table-striped table-dark">
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
                                <input type="submit" class="crudBtn" value="Ver Posts">
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
    </div>
@endsection
