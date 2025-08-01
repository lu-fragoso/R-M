@extends('layouts.app')

@section('content')
<div class="container py-5">
    <div class="row">
        <div class="col-md-4">
            <img src="{{ $personagem['image'] }}" class="img-fluid rounded shadow" alt="{{ $personagem['name'] }}">
        </div>
        <div class="col-md-8">
            <h2>{{ $personagem['name'] }}</h2>
            <p><strong>Status:</strong> {{ $personagem['status'] }}</p>
            <p><strong>Espécie:</strong> {{ $personagem['species'] }}</p>
            <p><strong>Gênero:</strong> {{ $personagem['gender'] }}</p>
            <p><strong>Localização atual:</strong> {{ $personagem['location']['name'] }}</p>
            <p><strong>URL:</strong> {{ $personagem['url'] }}</p>

            @auth
                <form method="POST" action="{{ route('favoritos.store') }}">
                    @csrf
                    <input type="hidden" name="personagem_id" value="{{ $personagem['id'] }}">
                    <input type="hidden" name="personagem_nome" value="{{ $personagem['name'] }}">
                    <input type="hidden" name="personagem_imagem" value="{{ $personagem['image'] }}">
                    <input type="hidden" name="personagem_especie" value="{{ $personagem['species'] }}">
                    <input type="hidden" name="personagem_url" value="{{ $personagem['url'] }}">
                    <input type="hidden" name="personagem_create_at" value="{{ $personagem['created'] }}">

                    @php
                        $jaFavoritado = auth()->user()->favoritos->contains('personagem_id', $personagem['id']);
                    @endphp

                    <button type="submit" class="btn {{ $jaFavoritado ? 'btn-danger' : 'btn-success' }}">
                        {{ $jaFavoritado ? 'Remover dos Favoritos' : 'Favoritar' }}
                    </button>
                </form>
            @else
                <div class="alert alert-warning mt-3">
                    <strong>Faça login</strong> para favoritar este personagem.
                    <a href="{{ route('login') }}" class="btn btn-sm btn-outline-primary ms-2">Login</a>
                    <a href="{{ route('register') }}" class="btn btn-sm btn-outline-secondary ms-2">Cadastro</a>
                </div>
            @endauth

            <a href="{{ route('personagens.index') }}" class="btn btn-secondary mt-3">← Voltar</a>
        </div>
    </div>
</div>
@endsection
