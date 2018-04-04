<div class="form-group">
    <label for="">Título</label>
    {{-- <input name="title" value="{{ old('title', isset($note) ? $note->title : '') }}" type="text" class="form-control" id="" placeholder="Escriba el título"> --}}
    {!! Form::text('title', null, ['class' => 'form-control', 'placeholder' => 'Escriba el título']) !!}
</div>

<div class="form-group">
    <label for="">Nota</label>
    {{-- <textarea name="body" class="form-control" id="" placeholder="Escriba la nota">{{ old('body', isset($note) ? $note->body : '') }}</textarea> --}}
    {!! Form::textarea('body', null, ['class' => 'form-control', 'placeholder' => 'Escriba la nota']) !!}
</div>

<div class="form-group">
    <label for="">Grupo</label>
    {{-- <select class="form-control" name="group_id">
        <option value="">--Ninguno--</option>
        @foreach ($groups as $group)
            <option value="{{ $group->id }}"
                @if (!is_null(old('group_id')))
                    {{ old('group_id') == $group->id ? 'selected' : '' }}
                @else
                    @if (isset($note))
                        {{ $note->group_id == $group->id ? 'selected' : '' }}
                    @endif
                @endif
            >{{ $group->name }}</option>
        @endforeach
    </select> --}}
    {!! Form::select('group_id', $groups, null, ['class' => 'form-control', 'placeholder' => '--Ninguno--']) !!}
</div>

<div class="checkbox">
    <label>
        <input type="hidden" name="important" value="0">
        {{-- <input type="checkbox" value="1" name="important"
            {{ oldCheckbox('important', (isset($note) ? $note : null) ) }}
        > --}}
        {!! Form::checkbox('important', 1) !!}
        Es importante
    </label>
</div>
