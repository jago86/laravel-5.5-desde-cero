<?php

namespace App\Http\Controllers;

use App\Note;
use App\Group;
use Illuminate\Http\Request;
use App\Http\Requests\NotesRequest;

class NotesController extends Controller
{
    public function index()
    {
        $groups = Group::all();
        $notes = Note::all();

        return view('notes/index', compact('notes', 'groups'));
    }

    public function show(Note $note)
    {
        return view('notes.show', ['note' => $note]);
    }

    public function create()
    {
        $groups = Group::all();
        return view('notes.create', compact('groups'));
    }

    public function store(NotesRequest $request)
    {
        // dd($request->all());
        $note = Note::create(request()->all());

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
