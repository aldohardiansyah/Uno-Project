<?php


Route::get('/', function () {
    return view('landing');
});

Route::get('/kelas', 'kelas@index');
