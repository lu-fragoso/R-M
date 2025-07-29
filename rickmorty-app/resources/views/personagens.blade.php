@extends('layouts.app')

@section('content')
<div class="container py-4">
    <h1 class="mb-4">Personagens de Rick and Morty</h1>
    <div id="lista-personagens" class="row g-4"></div>
    <div class="d-flex justify-content-center mt-4">
        <button id="carregar-mais" class="btn btn-primary">Carregar mais</button>
    </div>
</div>
@endsection

@section('scripts')
<script>
let currentPage = 1;

async function carregarPersonagens() {
    const res = await fetch(`https://rickandmortyapi.com/api/character?page=${currentPage}`);
    const data = await res.json();
    const container = document.getElementById('lista-personagens');

    data.results.forEach(p => {
        let badgeClass = 'bg-secondary';
        if (p.status === 'Alive') badgeClass = 'bg-success';
        else if (p.status === 'Dead') badgeClass = 'bg-danger';

        container.innerHTML += `
        <div class="col-12 col-sm-6 col-lg-3">
            <a href="/personagem/${p.id}" class="text-decoration-none text-dark">
                <div class="card h-100 shadow-sm">
                    <img src="${p.image}" class="card-img-top" alt="${p.name}">
                    <div class="card-body">
                        <h5 class="card-title">${p.name}</h5>
                        <span class="badge ${badgeClass}">${p.status}</span>
                        <p class="card-text mt-2 mb-0"><strong>Espécie:</strong> ${p.species}</p>
                        <p class="card-text"><strong>Gênero:</strong> ${p.gender}</p>
                    </div>
                </div>
            </a>
        </div>`;
    });

    currentPage++;
    if (!data.info.next) {
        document.getElementById('carregar-mais').style.display = 'none';
    }
}

document.getElementById('carregar-mais').addEventListener('click', carregarPersonagens);
document.addEventListener("DOMContentLoaded", carregarPersonagens);
</script>
@endsection
