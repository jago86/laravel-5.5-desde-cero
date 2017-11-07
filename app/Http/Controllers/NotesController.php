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

    public function show($id)
    {
        $note = Note::find(1);

        return view('notes/show', ['note' => $note]);
    }


}
