<?php

namespace App\Http\Controllers;

use App\Note;
use App\Group;
use Illuminate\Http\Request;
use App\Http\Requests\NotesRequest;

class NotesController extends Controller
{
    public function index(Group $group)
    {
        $groups = Group::all();
        $notes = \Auth::user()->notes()->belongsTo($group)->get();

        return view('notes/index', compact('notes', 'groups'));
    }

    public function show(Note $note)
    {
        return view('notes.show', ['note' => $note]);
    }

    public function create()
    {
        $groups = Group::pluck('name', 'id');
        return view('notes.create', compact('groups'));
    }

    public function store(NotesRequest $request)
    {
        $note = new Note(request()->all());
        Auth::user()->notes()->save($note);

        return redirect('/notes');
    }

    public function edit(Note $note)
    {
        $groups = Group::pluck('name', 'id');
        return view('notes.edit', compact('note', 'groups'));
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
