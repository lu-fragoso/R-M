@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <h1 class="mb-4">Sobre o Desenvolvedor</h1>

    <p>Olá! Meu nome é Lucas Fragoso e sou desenvolvedor apaixonado por tecnologia, inovação e soluções criativas. Este site faz parte de meus estudos e projetos em Laravel. Abaixo você pode conhecer um pouco mais do meu trabalho.</p>

    <hr>

    <h2 class="mt-5 mb-3">Projetos em Destaque</h2>

    <div class="row">
        <!-- Projeto 1 -->
        <div class="col-md-4 mb-4">
            <div class="card h-100 shadow-sm bg-secondary text-white">
                <div class="card-body">
                    <h5 class="card-title">FeelTrack - TCC</h5>
                    <p class="card-text">Plataforma para análise de reputação empresarial, com integração com redes sociais como X (Twitter), Threads, LinkedIn e Instagram, usando IA para análise de sentimento.</p>
                    <a href="#" class="btn btn-primary disabled">Em breve</a>
                </div>
            </div>
        </div>

        <!-- Projeto 2 -->
        <div class="col-md-4 mb-4">
            <div class="card h-100 shadow-sm bg-secondary text-white">
                <div class="card-body">
                    <h5 class="card-title">InfraAlerta</h5>
                    <p class="card-text">Aplicativo mobile para reportar problemas de infraestrutura urbana, promovendo cidades inteligentes com foco em sustentabilidade e mudanças climáticas.</p>
                    <a href="{{ url('https://github.com/mateusMfreitas/infraAlerta-Front') }}" class="btn btn-primary">Ver projeto</a>
                </div>
            </div>
        </div>

        <!-- Projeto 3 -->
        <div class="col-md-4 mb-4">
            <div class="card h-100 shadow-sm bg-secondary text-white">
                <div class="card-body">
                    <h5 class="card-title">Barber Shop</h5>
                    <p class="card-text">Aplicativo de Barbearia. Agendamentos de procedimentos e verificação de disponibilidade de profissionais.</p>
                    <a href="{{ url('https://github.com/lu-fragoso/Barber-Shop-App') }}" class="btn btn-primary">Ver projeto</a>
                </div>
            </div>
        </div>
        <!-- Projeto 4 -->
        <div class="col-md-4 mb-4">
            <div class="card h-100 shadow-sm bg-secondary text-white">
                <div class="card-body">
                    <h5 class="card-title">GPA</h5>
                    <p class="card-text">Sistema de Gerenciamento de Progresso Acadêmico.</p>
                    <a href="{{ url('https://github.com/lu-fragoso/GPA') }}" class="btn btn-primary">Ver projeto</a>
                </div>
            </div>
        </div>

        <!-- Projeto 5 -->
        <div class="col-md-4 mb-4">
            <div class="card h-100 shadow-sm bg-secondary text-white">
                <div class="card-body ">
                    <h5 class="card-title">Estoque</h5>
                    <p class="card-text">Aplicativo mobile para gerenciamento e verificação de estoques.</p>
                    <a href="{{ url('https://github.com/lu-fragoso/Estoque-Front') }}" class="btn btn-primary">Ver projeto</a>
                </div>
            </div>
        </div>
        
    </div>

    <hr>

    <h4 class="mt-5">GitHub</h4>
    <p>Veja mais projetos e colaborações no meu perfil do GitHub:</p>
    <a href="https://github.com/lu-fragoso" target="_blank" class="btn btn btn-primary">
        <i class="fab fa-github"></i> @lu-fragoso
    </a>
</div>
@endsection
