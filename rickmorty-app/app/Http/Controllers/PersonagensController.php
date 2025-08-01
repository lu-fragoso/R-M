<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Http;
use Illuminate\Http\Request;

class PersonagensController extends Controller
{
    public function index(Request $request)
    {
        $page = $request->get('page', 1);
        $name = $request->get('name');

        $url = 'https://rickandmortyapi.com/api/character?page=' . $page;

        if ($name) {
            $url .= '&name=' . urlencode($name);
        }

        $response = Http::get($url);

        if ($response->failed()) {
            return view('personagens.index', ['personagens' => [], 'info' => null, 'error' => 'Nenhum personagem encontrado.']);
        }

        $json = $response->json();
        return view('personagens.index', [
            'personagens' => $json['results'],
            'info' => $json['info'],
            'name' => $name,
            'page' => $page,
        ]);

    }

    public function show ($id)
    {
        $response = Http::get("https://rickandmortyapi.com/api/character/{$id}");

        if ($response->failed()) {
            abort(404);
        }

        return view('personagens.show', ['personagem' => $response->json()
        ]);
    }
}