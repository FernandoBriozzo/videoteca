@extends('layouts.master')
@section('title') Películas por director @endsection
@section('content')
<h1>Películas del director {{$director->nombre}}</h1>
@foreach($peliculas as $pelicula)
<li><a href="/peliculas/{{$pelicula->id}}">{{$pelicula->nombre}}</a></li>
@endforeach
@endsection