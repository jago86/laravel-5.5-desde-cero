<?php

namespace App\Http\Controllers;

use App\Note;
use App\Group;
use Illuminate\Http\Request;

class NotesWithoutGroupController extends Controller
{
    public function index()
    {
        $groups = Group::all();
        $notes = \Auth::user()->notes()->withoutGroup()->get();

        return view('notes/index', compact('notes', 'groups'));
    }
}
