@extends('main')

@section('content')
<h1>Crear Usuario</h1>
    <form action=# method=''> 
        <label for="nombre">Nombre</label><br>
        <input type="texto" name="nombre" placeholder="nombre"><br>
        <label for="apellido">Apellido</label><br>
        <input type="texto" name="apellido" placeholder="apellido"><br>
        <input type="submit" value="Enviar"> 
    </form>
@endsection