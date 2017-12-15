@extends('layouts.app')

@section('title')
    Editar nota {{ $note->title }}
@endsection

@section('content')
<form action="/notes/{{ $note->id }}" method="PATCH" role="form">
    {{ csrf_field() }}
    <legend>Editar nota</legend>

    @include('notes._form')

    <button type="submit" class="btn btn-primary">Actualizar</button>
</form>
@endsection
