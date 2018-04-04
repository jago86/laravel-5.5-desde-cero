@extends('layouts.app')

@section('title')
    Editar nota {{ $note->title }}
@endsection

@section('content')
{{-- <form action="/notes/{{ $note->id }}" method="POST" role="form"> --}}
{!! Form::model($note, ['url' => "/notes/{$note->id}", 'method' => 'PATCH']) !!}

    {{-- {{ method_field('PATCH') }}
    {{ csrf_field() }} --}}
    <legend>Editar nota</legend>

    @include('layouts._validation-errors')

    @include('notes._form')

    <button type="submit" class="btn btn-primary">Actualizar</button>
</form>
@endsection
