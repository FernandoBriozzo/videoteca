@extends('layouts.master')
@section('title') Películas por género @endsection
@section('content')
<h1>Películas del género {{$genero->nombre}}</h1>
@foreach($peliculas as $pelicula)
<li><a href="/peliculas/{{$pelicula->id}}">{{$pelicula->nombre}}</a></li>
@endforeach
@endsection