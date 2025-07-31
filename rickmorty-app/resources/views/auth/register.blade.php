@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-4">
            <h3 class="text-center mb-4">Cadastro</h3>
            <form method="POST" action="{{ route('register') }}">
                @csrf
                <div class="mb-3">
                    <label>Nome</label>
                    <input type="text" name="name" class="form-control" required />
                </div>
                <div class="mb-3">
                    <label>Email</label>
                    <input type="email" name="email" class="form-control" required />
                </div>
                <div class="mb-3">
                    <label>Senha</label>
                    <input type="password" name="password" class="form-control" required />
                </div>
                <div class="mb-3">
                    <label>Confirme a senha</label>
                    <input type="password" name="password_confirmation" class="form-control" required />
                </div>
                <button class="btn btn-success w-100">Cadastrar</button>
            </form>
            <div class="mt-3 text-center">
                <a href="{{ route('login') }}">Já tem conta? Faça login</a>
            </div>
        </div>
    </div>
</div>
@endsection
