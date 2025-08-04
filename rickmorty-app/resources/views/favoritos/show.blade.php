@extends('layouts.app')

@section('content')

<div class="container">
    <h2>Detalhes do Personagem Favorito</h2>
</div>

<div class="container py-5 d-flex justify-content-center">
    <div class="card shadow-lg p-4 bg-secondary text-white" style="max-width: 800px; width: 100%;">
        <div class="row g-4">
            <div class="col-md-5 text-center">
                <img src="{{ $favorito->personagem_imagem }}" class="img-fluid rounded" alt="{{ $favorito->personagem_nome }}">
            </div>
            <div class="col-md-7">
                <div class="card-body">                    
                    <h3 class="mb-3">{{ $favorito->personagem_nome }}</h3>
                    <ul class="list-group list-group-flush mb-3">
                        <li class="list-group-item bg-secondary text-white"><strong>Espécie:</strong> {{ $favorito->personagem_especie }}</li>
                        <li class="list-group-item bg-secondary text-white"><strong>URL:</strong> <a href="{{ $favorito->personagem_url }}" target="_blank" class="text-white">{{ $favorito->personagem_url }}</a></li>
                        <li class="list-group-item bg-secondary text-white"><strong>Criado na API:</strong> {{ $favorito->personagem_create_at }}</li>
                    </ul>

                    <!-- Botão de Remover dos Favoritos -->
                    <form action="{{ route('favoritos.destroy', $favorito->id) }}" method="POST" onsubmit="return confirm('Tem certeza que deseja remover dos favoritos?');">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger mt-2 w-100">Remover dos Favoritos</button>
                    </form>

                    <a href="{{ route('favoritos.index') }}" class="btn btn-dark mt-2 w-100">Voltar para Meus Favoritos</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
