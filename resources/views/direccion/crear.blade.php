@extends('main')

@section('content')
    <div class="container mx-auto">
    <h1>Crear Dirección</h1>
        <form action='/direccion' method='post'> 
        @csrf
            <label for="nombre">Calle</label><br>
            <input class="lightRounded" type="texto" name="calle" placeholder="calle"><br>

            <label for="numero">Numero</label><br>
            <input class="lightRounded" type="number" name="numero" placeholder="numero"><br>

            <label for="numero">Municipio</label><br>
            <input class="lightRounded" type="texto" name="municipio" placeholder="municpio"><br>

            <label for="numero">Codigo Postal</label><br>
            <input class="lightRounded" type="texto" name="codPostal" placeholder="codPostal"><br>
            <input type="submit" class='greyBlueBtn' value="+ Añadir Direccion"> 
        </form>
    </div>
@endsection