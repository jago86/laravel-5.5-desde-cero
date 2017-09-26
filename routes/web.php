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

Route::get('/', function () {
    $notes = [
        [
            'title' => 'Rutas Laravel',
            'body' => 'Las rutas se definen en el archivo routes/web.php',
            'important' => true
        ],
        [
            'title' => 'Blade',
            'body' => 'Blade es el motor de plantillas de Laravel',
            'important' => true
        ],
    ];
    return view('welcome', ['notes' => $notes]);
});

Route::get('/contact', function () {
    return view('contact');
});
