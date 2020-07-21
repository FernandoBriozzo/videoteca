@extends('layouts.master')
@section('title') Modificar Película @endsection
@section('content')
<form method="POST" action="/peliculas/{{$pelicula->id}}">
    <input type="hidden" name="_method" value="PUT">
    {{csrf_field()}}
    <div class="form-group">
        <label for="nombre">Nombre:</label>
        <input class="form-control" type="text" name="nombre" id="nombre" value="{{$pelicula->nombre}}">
    </div>
    <div class="form-group">
        <label for="anio">Año:</label>
        <input class="form-control" type="text" name="anio" id="anio" value="{{$pelicula->anio}}">
    </div>
    <div class="form-group">
        <label for="generos">Géneros:</label>
        <select class="form-control" id="genero" name="genero">
            @foreach($generos as $genero)
            <option value="{{$genero->id}}" @if($genero->id == $pelicula->genero_id) selected @endif>{{$genero->nombre}}
            </option>
            @endforeach
        </select>
    </div>
    <div class="form-group">
        <label for="directores">Directores:</label>
        <select class="form-control" id="director" name="director">
            @foreach($directores as $director)
            <option value="{{$director->id}}" @if($director->id == $pelicula->director_id) selected @endif>{{$director->nombre}}</option>
            @endforeach
        </select>
    </div>

    <div class="from-group">
        <button type="submit" class="btn btn-primary">Modificar</button>
        <a href="{{ url()->previous() }}" class="btn btn-secondary">Volver</a>
    </div>

</form>
@endsection