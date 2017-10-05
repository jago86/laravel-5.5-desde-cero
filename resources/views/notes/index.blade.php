<!DOCTYPE html>
<html>
<head>
    <title>Notas</title>
</head>
<body>
    <ul>
        @foreach ($notes as $note)
            <li>
                <a href="notes/{{ $note->id }}">{{ $note->title }} {{ ($note->important) ? '*' : '' }}</a>
            </li>
        @endforeach
    </ul>
</body>
</html>
