<div class="form-group">
    <label for="">Título</label>
    <input name="title" value="{{ isset($note) ? $note->title : '' }}" type="text" class="form-control" id="" placeholder="Escriba el título">
</div>

<div class="form-group">
    <label for="">Nota</label>
    <textarea name="body" class="form-control" id="" placeholder="Escriba la nota">{{ isset($note) ? $note->body : '' }}</textarea>
</div>

<div class="checkbox">
    <label>
        <input type="checkbox" value="1" name="important"
            @isset ($note)
                {{ $note->isImportant() ? 'checked' : '' }}
            @endif
        >
        Es importante
    </label>
</div>
