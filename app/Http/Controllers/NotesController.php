<?php

namespace App\Http\Controllers;

use App\Note;
use Illuminate\Http\Request;

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

    public function store()
    {
        Note::create(request()->all());

        return redirect('/notes');
    }

    public function edit(Note $note)
    {
        return view('notes.edit', compact('note'));
    }


}
