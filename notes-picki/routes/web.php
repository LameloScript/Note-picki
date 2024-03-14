<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/notes', 'NoteController@index')->name('notes.index');
Route::post('/notes', 'NoteController@store');
Route::get('/notes/{id}', 'NoteController@show');
Route::put('/notes/{id}', 'NoteController@update');
Route::delete('/notes/{id}', 'NoteController@destroy');
