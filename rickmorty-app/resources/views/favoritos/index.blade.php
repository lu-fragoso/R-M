@extends('layouts.app')

@section('content')
<div class="container mt-4">
    <h2 class="mb-4">Seus Personagens Favoritos</h2>

    @if($favoritos->isEmpty())
        <p>Você ainda não favoritou nenhum personagem.</p>
    @else
        <div class="row row-cols-1 row-cols-md-4 g-4">
            @foreach($favoritos as $fav)
                <div class="col">
                    <div class="card h-100">
                        <img src="{{ $fav->personagem_imagem }}" class="card-img-top" alt="{{ $fav->personagem_nome }}">
                        <div class="card-body">
                            <h5 class="card-title">{{ $fav->personagem_nome }}</h5>
                            <a href="{{ route('personagens.show', $fav->personagem_id) }}" class="btn btn-primary w-100">Ver detalhes</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    @endif
</div>
@endsection
