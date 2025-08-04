@extends('layouts.app')

@section('content')

<div class="container">
    <h2>Detalhes do Personagem</h2>
</div>

<div class="container py-5 d-flex justify-content-center">
    <div class="card shadow-lg p-4 bg-secondary text-white" style="max-width: 800px; width: 100%;">
        <div class="row g-4">
            <div class="col-md-5 text-center">
                <img src="{{ $personagem['image'] }}" class="img-fluid rounded" alt="{{ $personagem['name'] }}">
            </div>
            <div class="col-md-7 ">
                <h3 class="mb-3">{{ $personagem['name'] }}</h3>
                <ul class="list-group list-group-flush mb-3" >
                    <li class="list-group-item bg-secondary text-white"><strong>Status:</strong> {{ $personagem['status'] }}</li>
                    <li class="list-group-item bg-secondary text-white"><strong>Espécie:</strong> {{ $personagem['species'] }}</li>
                    <li class="list-group-item bg-secondary text-white"><strong>Gênero:</strong> {{ $personagem['gender'] }}</li>
                    <li class="list-group-item bg-secondary text-white"><strong>Localização atual:</strong> {{ $personagem['location']['name'] }}</li>
                    <li class="list-group-item bg-secondary text-white"><strong>URL:</strong> <a href="{{ $personagem['url'] }}" target="_blank" class="text-white">{{ $personagem['url'] }}</a></li>
                </ul>

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

                        <button type="submit" class="btn {{ $jaFavoritado ? 'btn-danger' : 'btn-success' }} w-100">
                            {{ $jaFavoritado ? 'Remover dos Favoritos' : 'Favoritar' }}
                        </button>
                    </form>
                @else
                    <div class="alert alert-warning mt-3">
                        <strong>Faça login</strong> para favoritar este personagem.
                        <p>
                        <p>   
                        <a href="{{ route('login') }}" class="btn btn-sm btn-outline-primary ms-2">Login</a>
                        <a href="{{ route('register') }}" class="btn btn-sm btn-outline-secondary ms-2">Cadastro</a>
                    </div>
                @endauth

                <a href="{{ route('personagens.index') }}" class="btn btn-dark mt-3 w-100">← Voltar</a>
            </div>
        </div>
    </div>
</div>
@endsection
