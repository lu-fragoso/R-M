<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;     // Import do Auth
use App\Models\Favorito;                 // Import do seu model Favorito (ajuste o namespace se necessário)

class FavoritoController extends Controller
{
   
    public function store(Request $request)
    {
        // Validação simples dos dados recebidos
        $request->validate([
            'personagem_id' => 'required|integer',
            'personagem_nome' => 'required|string|max:255',
            'personagem_imagem' => 'required|string|max:255',
        ]);

        Favorito::create([
            'user_id' => Auth::id(),
            'personagem_id' => $request->personagem_id,
            'personagem_nome' => $request->personagem_nome,
            'personagem_imagem' => $request->personagem_imagem,
        ]);

        return redirect()->back()->with('success', 'Personagem favoritado!');
    }

    public function index()
    {
        // Como o middleware já protege, aqui não precisa do check Auth::check()
        $favoritos = Auth::user()->favoritos; // Ajuste conforme sua relação no model User
        return view('favoritos.index', compact('favoritos'));
    }
}
