@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Meus Favoritos</h2>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    @if($favoritos->isEmpty())
        <p>Você não tem personagens favoritos ainda.</p>
    @else
        <div class="row">
            @foreach($favoritos as $fav)
                <div class="col-md-3 mb-3">
                    <div class="card h-100">
                        <a href="{{ route('favoritos.show', $fav->id) }}">
                            <img src="{{ $fav->personagem_imagem }}" class="card-img-top" alt="{{ $fav->personagem_nome }}">
                        </a>
                        <div class="card-body text-center">
                            <h5 class="card-title">{{ $fav->personagem_nome }}</h5>
                            <p class="card-text">{{ $fav->personagem_especie }}</p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    @endif
</div>
@endsection
