<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Rick and Morty App</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark shadow-sm">
      <div class="container">
        <a class="navbar-brand" href="/">Rick&Morty</a>
        <div class="collapse navbar-collapse">
          <ul class="navbar-nav ms-auto">
            <li class="nav-item"><a class="nav-link" href="/">Home</a></li>
            <li class="nav-item"><a class="nav-link" href="/personagens">Personagens</a></li>
            <li class="nav-item"><a class="nav-link" href="/sobre">Sobre</a></li>
          </ul>
        </div>
      </div>
    </nav>

    <main>
      @yield('content')
    </main>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    @yield('scripts')
</body>
</html>
