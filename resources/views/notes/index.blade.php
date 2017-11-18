@extends('layouts.app')

@section('title')
  Listado de notas
@endsection

@section('content')
    <ul>
        @foreach ($notes as $note)
            <li>
                <a href="/notes/{{ $note->id }}">
                    {{ $note->title }}

                    @if ($note->isImportant())
                        *
                    @endif
                </a>
            </li>
        @endforeach
    </ul>
@endsection
