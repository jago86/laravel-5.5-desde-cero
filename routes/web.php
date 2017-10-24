<?php
use App\Note;

Route::get('/notes', function () {
    // $notes = DB::table('notes')->get();
    $notes = Note::all();

    return view('notes/index', ['notes' => $notes]);
});

Route::get('/notes/{id}', function ($id) {
    // $note = DB::table('notes')->find($id);
    $note = Note::find(1);

    return view('notes/show', ['note' => $note]);
});

Route::get('/contact', function () {
    return view('contact');
});
