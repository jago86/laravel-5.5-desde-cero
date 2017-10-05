<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/notes', function () {
    $notes = DB::table('notes')->get();

    return view('notes/index', ['notes' => $notes]);
});

Route::get('/notes/{id}', function ($id) {
    $note = DB::table('notes')->find($id);

    return view('notes/show', ['note' => $note]);
});

Route::get('/contact', function () {
    return view('contact');
});
