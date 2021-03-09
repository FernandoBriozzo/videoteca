@extends('layouts.master')
@section('title') Crear Película @endsection
@section('content')
<form method="POST">
    {{csrf_field()}}
    <div class="form-group">
        <label for="nombre">Nombre:</label>
        <input class="form-control" type="text" name="nombre" id="nombre">
    </div>
    <div class="from-group">
        <button type="submit" class="btn btn-primary">Crear</button>
        <a href="{{ url()->previous() }}" class="btn btn-secondary">Volver</a>
    </div>

</form>
@endsection