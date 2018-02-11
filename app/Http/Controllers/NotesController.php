<?php

namespace App\Http\Controllers;

use App\Note;
use Illuminate\Http\Request;
use App\Http\Requests\NotesRequest;

class NotesController extends Controller
{
    public function index()
    {
        $notes = Note::all();

        return view('notes/index', ['notes' => $notes]);
    }

    public function show(Note $note)
    {
        return view('notes.show', ['note' => $note]);
    }

    public function create()
    {
        return view('notes.create');
    }

    public function store(NotesRequest $request)
    {

        Note::create(request()->all());

        return redirect('/notes');
    }

    public function edit(Note $note)
    {
        return view('notes.edit', compact('note'));
    }

    public function update(Note $note, NotesRequest $request)
    {

        $note->update(request()->all());

        return redirect('/notes');
    }

    public function destroy(Note $note)
    {
        $note->delete();

        return redirect('/notes');
    }


}
