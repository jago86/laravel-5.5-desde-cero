@extends('layouts.app')

@section('title')
  Listado de notas
@endsection

@section('content')

    <table class="table table-hover">
        <thead>
            <tr>
                <th>Nota</th>
                <th>Editar</th>
                <th>Eliminar</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($notes as $note)
                <tr>
                    <td>
                        <a href="/notes/{{ $note->id }}">
                            {{ $note->title }}

                            @if ($note->isImportant())
                                *
                            @endif
                        </a>
                    </td>
                    <td>
                        <a href="/notes/{{ $note->id }}/edit" class="btn btn-primary btn-sm">Editar</a>
                    </td>
                    <td>
                        <form action="/notes/{{ $note->id }}" method="POST">
                            {{ method_field('DELETE') }}
                            {{ csrf_field() }}
                            <button type="button" class="btn btn-danger btn-sm btn-delete">Eliminar</button>
                        </form>
                    </td>

                </tr>
            @endforeach

        </tbody>
    </table>
@endsection

@section('scripts')
    <script>
        $('.btn-delete').on('click', function(e) {
            if(confirm('¿Está seguro de borrar la nota?')) {
                $(this).parents('form:first').submit();
            }
        });
    </script>
@endsection
