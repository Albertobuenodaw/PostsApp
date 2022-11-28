@extends('main')

@section('content')
    <h1>Introduce tema</h1>
    <form class=form-group action='{{route("tema-store")}}' method='post'>
    @csrf
        <input class="lightRounded" type="texto" name="tema" placeholder="Tema" ><br>
        <input type="submit" class = 'greyBlueBtn' value="+ Añadir Tema"> 
    </form>
   
@endsection