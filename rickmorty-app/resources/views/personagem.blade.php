@extends('layouts.app')

@section('content')
<div class="container py-5">
    <a href="/personagens" class="btn btn-outline-secondary mb-4">&larr; Voltar para lista</a>

    <div class="row">
        <div class="col-md-4">
            <img src="{{ $personagem['image'] }}" class="img-fluid rounded shadow" alt="{{ $personagem['name'] }}">
        </div>
        <div class="col-md-8">
            <h2>{{ $personagem['name'] }}</h2>
            <p><strong>Status:</strong> <span class="badge 
                {{ $personagem['status'] === 'Alive' ? 'bg-success' : ($personagem['status'] === 'Dead' ? 'bg-danger' : 'bg-secondary') }}">
                {{ $personagem['status'] }}
            </span></p>
            <p><strong>Espécie:</strong> {{ $personagem['species'] }}</p>
            <p><strong>Gênero:</strong> {{ $personagem['gender'] }}</p>
            <p><strong>Origem:</strong> {{ $personagem['origin']['name'] }}</p>
            <p><strong>Local Atual:</strong> {{ $personagem['location']['name'] }}</p>
        </div>
    </div>
</div>
@endsection
