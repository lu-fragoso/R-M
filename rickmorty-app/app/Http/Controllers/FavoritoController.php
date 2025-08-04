<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Favorito;

class FavoritoController extends Controller
{
    public function store(Request $request)
    {
        // Validação dos dados recebidos
        $request->validate([
            'personagem_id' => 'required|integer',
            'personagem_nome' => 'required|string|max:255',
            'personagem_especie' => 'required|string|max:255',
            'personagem_imagem' => 'required|string|max:255',
            'personagem_url' => 'required|string|max:255',
            'personagem_create_at' => 'required|string|max:255',
        ]);

        $userId = Auth::id();
        $personagemId = $request->personagem_id;

        // Verifica se já está favoritado
        $favoritoExistente = Favorito::where('user_id', $userId)
            ->where('personagem_id', $personagemId)
            ->first();

        if ($favoritoExistente) {
            // Se já existe, remove
            $favoritoExistente->delete();
            return redirect()->back()->with('success', 'Personagem removido dos favoritos!');
        } else {
            // Se não existe, adiciona
            Favorito::create([
                'user_id' => $userId,
                'personagem_id' => $personagemId,
                'personagem_nome' => $request->personagem_nome,
                'personagem_especie' => $request->personagem_especie,
                'personagem_imagem' => $request->personagem_imagem,
                'personagem_url' => $request->personagem_url,
                'personagem_create_at' => $request->personagem_create_at,
                'personagem_update_at' => now(),
            ]);
            return redirect()->back()->with('success', 'Personagem favoritado!');
        }
    }

    public function index()
    {
        $perPage = 20;

        $user = Auth::user();

        $favoritos = $user->favoritos()->paginate($perPage);

        return view('favoritos.index', compact('favoritos'));
    }

    public function show($id)
{
    $favorito = Favorito::where('user_id', auth()->id())
        ->where('id', $id)
        ->firstOrFail();

    return view('favoritos.show', compact('favorito'));
}

public function destroy($id)
{
    $favorito = Favorito::findOrFail($id);

    // Verifica se o favorito pertence ao usuário logado
    if ($favorito->user_id !== auth()->id()) {
        abort(403, 'Acesso não autorizado');
    }

    $favorito->delete();

    return redirect()->route('favoritos.index')->with('success', 'Personagem removido dos favoritos com sucesso!');
}



}
