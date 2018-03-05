@extends('layouts.app')

@section('title')
  Listado de notas
@endsection

@section('content')

    <div class="row">
        <div class="col-md-2">
            <h4>Grupos</h4>
            <ul class="list-group">
                <li class="list-group-item"><a href="/notes">--Ninguno--</a></li>
                @foreach ($groups as $group)
                    <li class="list-group-item"><a href="/groups/{{ $group->id }}/notes">{{ $group->name }}</a></li>
                @endforeach
            </ul>
        </div>
        <div class="col-md-10">
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th>Nota</th>
                        <th>Grupo</th>
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
                                @if ($note->group_id != null)
                                    <label class="label label-info">{{ $note->group->name }}</label>
                                @endif
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
        </div>
    </div>

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
