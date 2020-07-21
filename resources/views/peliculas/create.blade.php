@extends('layouts.master')
@section('title') Crear Película @endsection
@section('content')
<form method="POST" action="/peliculas">
    {{csrf_field()}}
    <div class="form-group">
        <label for="nombre">Nombre:</label>
        <input class="form-control" type="text" name="nombre" id="nombre">
    </div>
    <div class="form-group">
        <label for="anio">Año:</label>
        <input class="form-control" type="text" name="anio" id="anio">
    </div>
    <div class="form-group">
        <label for="generos">Géneros:</label>
        <select class="form-control" id="genero" name="genero">
            @foreach($generos as $genero)
            <option value="{{$genero->id}}">{{$genero->nombre}}</option>
            @endforeach
        </select>
    </div>
    <div class="form-group">
        <label for="directores">Directores:</label>
        <select class="form-control" id="director" name="director">
            @foreach($directores as $director)
            <option value="{{$director->id}}">{{$director->nombre}}</option>
            @endforeach
        </select>
    </div>
    <div class="form-group">
        <label for="sinopsis">Sinopsis:</label>
        <input class="form-control" type="textarea" id="sinposis" name="sinopsis">
    </div>

    <div class="from-group">
        <button type="submit" class="btn btn-primary">Crear</button>
        <a href="{{ url()->previous() }}" class="btn btn-secondary">Volver</a>
    </div>

</form>
@endsection