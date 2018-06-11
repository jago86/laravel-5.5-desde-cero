<?php

Route::get('/', function(){
    return view('welcome');
});

Route::get('/subscription-cancelled', function() {
    return 'Subscripción cancelada por falta de pago';
});

Route::group(['middleware' => ['auth', 'check.paid']], function () {
    Route::get('/notes', 'NotesWithoutGroupController@index');
    Route::get('/groups/{group}/notes', 'NotesController@index');

    Route::get('/notes/create', 'NotesController@create');
    Route::get('/notes/{note}', 'NotesController@show');
    Route::get('/notes/{note}/edit', 'NotesController@edit');
    Route::patch('/notes/{note}', 'NotesController@update');
    Route::post('/notes', 'NotesController@store');
    Route::delete('/notes/{note}', 'NotesController@destroy');
});

Route::get('/contact', function () {
    return view('contact');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
