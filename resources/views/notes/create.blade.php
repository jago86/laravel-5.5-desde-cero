@extends('layouts.app')

@section('title')
    Crear nueva nota
@endsection

@section('content')
<form action="/notes" method="POST" role="form">
    {{ csrf_field() }}
    <legend>Crear nueva nota</legend>

    @include('notes._form')

    <button type="submit" class="btn btn-primary">Crear</button>
</form>
@endsection
