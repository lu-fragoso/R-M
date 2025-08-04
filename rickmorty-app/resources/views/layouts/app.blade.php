<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <link rel="icon" type="image/x-icon" href="{{ asset('images.ico') }}">

    <title>Rick and Morty App</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-dark text-white">
    <nav class="navbar navbar-expand-lg navbar-light bg-white shadow-sm">
        <div class="container">
            <a class="navbar-brand fw-bold" href="/">Rick & Morty</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse " id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <!-- Itens visíveis para todos -->
                    <li class="nav-item"><a class="nav-link fw-bold" href="/">Home</a></li>
                    <li class="nav-item"><a class="nav-link fw-bold" href="{{ route('favoritos.index') }}">Favoritos</a></li>
                    <li class="nav-item"><a class="nav-link fw-bold" href="/sobre">Sobre</a></li>
@auth
<li class="nav-item dropdown">
    <a class="nav-link dropdown-toggle fw-bold" href="#" id="userDropdown" role="button" data-bs-toggle="dropdown">
        {{ Auth::user()->name }}
    </a>
    <ul class="dropdown-menu dropdown-menu-end">
        <li>
            <form method="POST" action="{{ route('logout') }}">
                @csrf
                <button type="submit" class="dropdown-item text-danger fw-bold">Sair</button>
            </form>
        </li>
    </ul>
</li>
@endauth

                </ul>
            </div>
        </div>
    </nav>

    <main class="py-4">
        @yield('content')
    </main>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    @yield('scripts')

    <footer class="bg-light text-black text-center py-3 mt-5 shadow-lg">
        <div class="container">
            <p class="mb-0 fw-bold">Desenvolvido por Lucas Fragoso</p>
            <small>&copy; {{ date('Y') }} - Todos os direitos reservados</small>
        </div>
    </footer>

</body>
</html>
