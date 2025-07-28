<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/personagens', function () {
    return view('personagens');
});

Route::get('/sobre', function () {
    return view('sobre');
});

