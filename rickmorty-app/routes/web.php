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

Route::get('/personagem/{id}', function ($id) {
    $response = Http::get("https://rickandmortyapi.com/api/character/{$id}");
    
    if ($response->failed()) {
        abort(404);
    }

    $personagem = $response->json();
    return view('personagem', compact('personagem'));
});
