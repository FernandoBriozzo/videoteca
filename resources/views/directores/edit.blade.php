@extends('layouts.master')
@section('title') Modificar Director @endsection
@section('content')
<form method="POST" action="/directores/{{$director->id}}">
    <input type="hidden" name="_method" value="PUT">
    {{csrf_field()}}
    <div class="form-group">
        <label for="nombre">Nombre:</label>
        <input class="form-control" type="text" name="nombre" id="nombre" value="{{$director->nombre}}">
    </div>

    <div class="from-group">
        <button type="submit" class="btn btn-primary">Modificar</button>
        <a href="{{ url()->previous() }}" class="btn btn-secondary">Volver</a>
    </div>

</form>
@endsection