@extends('main')

@section('content')
<div class='container  w-80'>
    <h1>Crear Usuario</h1>
        <form action='/usuarios' method='post'> 
        @csrf
            <label for="nombre">Nombre</label><br>
            <input class="lightRounded" type="texto" name="nombre" placeholder="nombre" required><br>
            <label for="apellido">Apellido</label><br>
            <input class="lightRounded" type="texto" name="apellido" placeholder="apellido"><br>
            <input type="submit" class = 'greyBlueBtn' value="+ Añadir Usuario"> 
            @if (session('message'))
                <div class='alert alert-success'>{{ session('message') }}</div>
            @endif
        </form>
</div>
@endsection