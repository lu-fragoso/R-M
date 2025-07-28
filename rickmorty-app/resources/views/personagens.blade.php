<h1>Personagens</h1>
<div id="lista-personagens" class="row row-cols-1 row-cols-md-4 g-4"></div>

<script>
document.addEventListener("DOMContentLoaded", async () => {
    const container = document.getElementById('lista-personagens');
    const res = await fetch('https://rickandmortyapi.com/api/character');
    const data = await res.json();

    data.results.forEach(p => {
        container.innerHTML += `
        <div class="col">
            <div class="card h-100">
                <img src="${p.image}" class="card-img-top">
                <div class="card-body">
                    <h5 class="card-title">${p.name}</h5>
                    <p class="card-text">${p.species} - ${p.status}</p>
                </div>
            </div>
        </div>`;
    });
});
</script>
