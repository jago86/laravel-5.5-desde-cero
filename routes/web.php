<?php

Route::get('/', function(){
    return view('welcome');
});

Route::get('/notes', 'NotesController@index');

Route::get('/notes/create', 'NotesController@create');
Route::get('/notes/{note}', 'NotesController@show');
Route::get('/notes/{note}/edit', 'NotesController@edit');
Route::patch('/notes/{note}', 'NotesController@update');
Route::post('/notes', 'NotesController@store');
Route::delete('/notes/{note}', 'NotesController@destroy');

Route::get('/contact', function () {
    return view('contact');
});
