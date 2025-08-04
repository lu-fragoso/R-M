@extends('layouts.app')

@section('content')
<div class="container py-4">
    <h1 class="mb-3">Personagens de Rick and Morty</h1>

    <form method="GET" class="mb-4">
        <div class="input-group">
            <input type="text" name="name" class="form-control" placeholder="Buscar por nome" value="{{ $name }}">
            <button type="submit" class="btn btn-primary text-black">Buscar</button>
        </div>
    </form>

    @if(isset($error))
        <div class="alert alert-warning">{{ $error }}</div>
    @endif

    <div class="row g-4">
        @foreach($personagens as $p)
        <div class="col-12 col-sm-6 col-lg-3">
            <div class="card h-100 shadow-sm bg-secondary text-white">
                <a href="{{ route('personagens.show', $p['id']) }}">
                    <img src="{{ $p['image'] }}" class="card-img-top" alt="{{ $p['name'] }}">
                </a>
                <div class="card-body">
                    <h5 class="card-title">{{ $p['name'] }}</h5>
                </div>
            </div>
        </div>
        @endforeach
    </div>

   @if($info && $info['pages'] > 1)
    @php
        $totalPages = $info['pages'];
        $currentPage = $page;
        $maxLinks = 5; // Número máximo de páginas a mostrar ao redor
        $start = max(1, $currentPage - floor($maxLinks / 2));
        $end = min($totalPages, $start + $maxLinks - 1);
        $start = max(1, $end - $maxLinks + 1); // Ajuste caso esteja no fim
    @endphp

    <nav class="mt-4">
        <ul class="pagination justify-content-center">

            {{-- Primeira página --}}
            @if($currentPage > 1)
                <li class="page-item">
                    <a class="page-link" href="?page=1{{ $name ? '&name=' . urlencode($name) : '' }}">&laquo;</a>
                </li>
            @endif

            @if($start > 1)
                <li class="page-item disabled"><span class="page-link">...</span></li>
            @endif

            {{-- Páginas centralizadas --}}
            @for ($i = $start; $i <= $end; $i++)
                <li class="page-item {{ $i == $currentPage ? 'active' : '' }}">
                    <a class="page-link" href="?page={{ $i }}{{ $name ? '&name=' . urlencode($name) : '' }}">{{ $i }}</a>
                </li>
            @endfor

            @if($end < $totalPages)
                <li class="page-item disabled"><span class="page-link">...</span></li>
            @endif

            {{-- Última página --}}
            @if($currentPage < $totalPages)
                <li class="page-item">
                    <a class="page-link" href="?page={{ $totalPages }}{{ $name ? '&name=' . urlencode($name) : '' }}">&raquo;</a>
                </li>
            @endif
        </ul>
    </nav>
@endif

</div>
@endsection
