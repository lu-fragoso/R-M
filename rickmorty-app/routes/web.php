<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});


Route::get('/sobre', function () {
    return view('sobre');
});

use App\Http\Controllers\PersonagensController;

Route::get('/personagens', [PersonagensController::class, 'index'])->name('personagens.index');
Route::get('/personagem/{id}', [PersonagensController::class, 'show'])->name('personagens.show');