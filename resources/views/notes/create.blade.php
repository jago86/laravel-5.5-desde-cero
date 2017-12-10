@extends('layouts.app')

@section('title')
    Crear nueva nota
@endsection

@section('content')
<form action="/notes" method="POST" role="form">
    {{ csrf_field() }}
    <legend>Crear nueva nota</legend>

    <div class="form-group">
        <label for="">Título</label>
        <input name="title" type="text" class="form-control" id="" placeholder="Escriba el título">
    </div>

    <div class="form-group">
        <label for="">Nota</label>
        <textarea name="body" class="form-control" id="" placeholder="Escriba la nota"></textarea>
    </div>

    <div class="checkbox">
        <label>
            <input type="checkbox" value="1" name="important">
            Es importante
        </label>
    </div>

    <button type="submit" class="btn btn-primary">Crear</button>
</form>
@endsection
