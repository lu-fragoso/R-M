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
            <p><strong>Origem:</strong> {{ $personagem['origin']['name'] }}</p>
            <p><strong>Localização atual:</strong> {{ $personagem['location']['name'] }}</p>

            <form method="POST" action="#">
                @csrf
                <button class="btn btn-outline-danger" disabled>❤️ Favoritar</button>
            </form>

            <a href="{{ route('personagens.index') }}" class="btn btn-secondary mt-3">← Voltar</a>
        </div>
    </div>
</div>
@endsection
