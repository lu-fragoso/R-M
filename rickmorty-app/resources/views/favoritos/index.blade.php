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
                    <div class="card h-100 shadow-sm bg-secondary text-white">
                        <a href="{{ route('favoritos.show', $fav->id) }}">
                            <img src="{{ $fav->personagem_imagem }}" class="card-img-top" alt="{{ $fav->personagem_nome }}">
                        </a>
                        <div class="card-body">
                            <h5 class="card-title">{{ $fav->personagem_nome }}</h5>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    @endif

    @if($favoritos->lastPage() > 1)
    @php
        $totalPages = $favoritos->lastPage();
        $currentPage = $favoritos->currentPage();
        $maxLinks = 5;

        $start = max(1, $currentPage - floor($maxLinks / 2));
        $end = min($totalPages, $start + $maxLinks - 1);
        $start = max(1, $end - $maxLinks + 1);
    @endphp

    <nav class="mt-4">
        <ul class="pagination justify-content-center">
            {{-- Primeira página --}}
            @if($currentPage > 1)
                <li class="page-item">
                    <a class="page-link" href="{{ $favoritos->url(1) }}">&laquo;</a>
                </li>
            @endif

            @if($start > 1)
                <li class="page-item disabled"><span class="page-link">...</span></li>
            @endif

            {{-- Links das páginas --}}
            @for ($i = $start; $i <= $end; $i++)
                <li class="page-item {{ $i == $currentPage ? 'active' : '' }}">
                    <a class="page-link" href="{{ $favoritos->url($i) }}">{{ $i }}</a>
                </li>
            @endfor

            @if($end < $totalPages)
                <li class="page-item disabled"><span class="page-link">...</span></li>
            @endif

            {{-- Última página --}}
            @if($currentPage < $totalPages)
                <li class="page-item">
                    <a class="page-link" href="{{ $favoritos->url($totalPages) }}">&raquo;</a>
                </li>
            @endif
        </ul>
    </nav>
@endif

</div>
@endsection
