@extends('layouts.app')

@section('content')
<div class="container py-4">
    <h1 class="mb-3">Personagens de Rick and Morty</h1>

    <form method="GET" class="mb-4">
        <div class="input-group">
            <input type="text" name="name" class="form-control" placeholder="Buscar por nome" value="{{ $name }}">
            <button type="submit" class="btn btn-primary">Buscar</button>
        </div>
    </form>

    @if(isset($error))
        <div class="alert alert-warning">{{ $error }}</div>
    @endif

    <div class="row g-4">
        @foreach($personagens as $p)
        <div class="col-12 col-sm-6 col-lg-3">
            <div class="card h-100 shadow-sm">
                <a href="{{ route('personagens.show', $p['id']) }}">
                    <img src="{{ $p['image'] }}" class="card-img-top" alt="{{ $p['name'] }}">
                </a>
                <div class="card-body">
                    <h5 class="card-title">{{ $p['name'] }}</h5>
                    <p class="card-text"><strong>Status:</strong> {{ $p['status'] }}</p>
                </div>
            </div>
        </div>
        @endforeach
    </div>

    @if($info)
    <nav class="mt-4">
        <ul class="pagination justify-content-center">
            @for ($i = 1; $i <= $info['pages']; $i++)
                <li class="page-item {{ $i == $page ? 'active' : '' }}">
                    <a class="page-link" href="?page={{ $i }}{{ $name ? '&name=' . urlencode($name) : '' }}">{{ $i }}</a>
                </li>
            @endfor
        </ul>
    </nav>
    @endif
</div>
@endsection
