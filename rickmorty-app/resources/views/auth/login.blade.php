@extends('layouts.app')

@section('content')
<div class="container mt-5">

    {{-- Alerta de mensagem vinda da sessão (ex: "Você precisa estar logado...") --}}
    @if(session('message'))
        <div class="alert alert-warning alert-dismissible fade show" role="alert">
            {{ session('message') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Fechar"></button>
        </div>
    @endif

    {{-- Alerta de erro padrão do Laravel (ex: credenciais inválidas) --}}
    @if(session('status'))
        <div class="alert alert-danger">{{ session('status') }}</div>
    @endif

    <div class="row justify-content-center">
        <div class="col-md-4">
            <h3 class="text-center mb-4">Login</h3>
            <form method="POST" action="{{ route('login') }}">
                @csrf
                <div class="mb-3">
                    <label>Email</label>
                    <input type="email" name="email" class="form-control" required autofocus />
                </div>
                <div class="mb-3">
                    <label>Senha</label>
                    <input type="password" name="password" class="form-control" required />
                </div>
                <button class="btn btn-primary w-100">Entrar</button>
            </form>
            <div class="mt-3 text-center">
                <a href="{{ route('register') }}">Criar uma conta</a>
            </div>
        </div>
    </div>
</div>
@endsection

@section('scripts')
<script>
    // Fecha alertas automaticamente após 5 segundos
    document.addEventListener('DOMContentLoaded', () => {
        setTimeout(() => {
            const alert = document.querySelector('.alert');
            if (alert) {
                const fadeEffect = new bootstrap.Alert(alert);
                fadeEffect.close();
            }
        }, 5000);
    });
</script>
@endsection