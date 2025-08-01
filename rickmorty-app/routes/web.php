<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PersonagensController;


Route::get('/sobre', function () {
    return view('sobre');
});

Route::get('/', [PersonagensController::class, 'index'])->name('personagens.index');

Route::get('/personagem/{id}', [PersonagensController::class, 'show'])->name('personagens.show');

use App\Http\Controllers\FavoritoController;

Route::middleware(['auth'])->group(function () {
    Route::post('/favoritar', [FavoritoController::class, 'store'])->name('favoritos.store');
    Route::get('/favoritos', [FavoritoController::class, 'index'])->name('favoritos.index');
    Route::get('/favoritos/{id}', [FavoritoController::class, 'show'])->name('favoritos.show');
    Route::resource('favoritos', FavoritoController::class)->middleware('auth');
});




Route::get('/login-teste', function () {
    return auth()->check() ? 'Logado como ' . auth()->user()->email : 'Não logado';
});


require __DIR__.'/auth.php';
