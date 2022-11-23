@extends('main')

@section('content')
<div class='container'>
    <h1>Crear Usuario</h1>
        <form action='/usuarios' method='post'> 
        @csrf
            <label for="nombre">Nombre</label><br>
            <input type="texto" name="nombre" placeholder="nombre"><br>
            <label for="apellido">Apellido</label><br>
            <input type="texto" name="apellido" placeholder="apellido"><br>
            <input type="submit" class = 'blueButton' value="+ Añadir Usuario"> 
        </form>
</div>
@endsection