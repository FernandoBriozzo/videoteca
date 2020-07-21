@extends('layouts.master')
@section('title')
Información de película
@endsection
@section('content')
<h1>Información de la película:</h1>
<h2>{{$pelicula->nombre}} ({{$pelicula->anio}})</h2>
<h3>{{$pelicula->director}}. {{$pelicula->genero}}</h3>
<h4>Sinopsis:</h4>
<p>{{$pelicula->sinopsis}}</p>
@endsection
