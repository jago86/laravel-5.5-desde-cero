<div class="form-group">
    <label for="">Título</label>
    <input name="title" value="{{ old('title', isset($note) ? $note->title : '') }}" type="text" class="form-control" id="" placeholder="Escriba el título">
</div>

<div class="form-group">
    <label for="">Nota</label>
    <textarea name="body" class="form-control" id="" placeholder="Escriba la nota">{{ old('body', isset($note) ? $note->body : '') }}</textarea>
</div>

<div class="checkbox">
    <label>
        <input type="hidden" name="important" value="0">
        <input type="checkbox" value="1" name="important"
            {{ oldCheckbox('important', (isset($note) ? $note : null) ) }}
        >
        Es importante
    </label>
</div>
