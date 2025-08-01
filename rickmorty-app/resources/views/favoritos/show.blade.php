@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Detalhes do Personagem Favorito</h2>

    <div class="card mb-3" style="max-width: 540px;">
        <div class="row g-0">
            <div class="col-md-4">
                <img src="{{ $favorito->personagem_imagem }}" class="img-fluid rounded-start" alt="{{ $favorito->personagem_nome }}">
            </div>
            <div class="col-md-8">
                <div class="card-body">
                    <h5 class="card-title">{{ $favorito->personagem_nome }}</h5>
                    <p class="card-text"><strong>Espécie:</strong> {{ $favorito->personagem_especie }}</p>
                    <p class="card-text"><strong>API URL:</strong> <a href="{{ $favorito->personagem_url }}" target="_blank">Ver personagem</a></p>
                    <p class="card-text"><small class="text-muted">Criado na API: {{ $favorito->personagem_create_at }}</small></p>

                    <!-- Botão de Remover dos Favoritos -->
                    <form action="{{ route('favoritos.destroy', $favorito->id) }}" method="POST" onsubmit="return confirm('Tem certeza que deseja remover dos favoritos?');">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger mt-2">Remover dos Favoritos</button>
                    </form>

                    <a href="{{ route('favoritos.index') }}" class="btn btn-secondary mt-2">Voltar para Meus Favoritos</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
