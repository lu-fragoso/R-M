# Rick and Morty App

## Estrutura do Projeto

- **Frontend (Views Blade)**
  - Templates para páginas:
    - Lista de personagens (com busca e paginação)
    - Detalhes do personagem
    - Lista de favoritos do usuário
    - Página Sobre com apresentação de projetos
  - Componentes comuns: Navbar e Footer
  - Estilização com Bootstrap 5 para responsividade e design moderno

- **Backend (Controllers e Models)**
  - Controladores de autenticação (login, cadastro, logout) usando Laravel Breeze
  - `PersonagensController`: busca e exibição de personagens via API externa
  - `FavoritoController`: gerencia favoritos (salvar, listar, remover) para usuários autenticados
  - Models:
    - `User` com relacionamento para favoritos
    - `Favorito` para armazenar personagens salvos localmente no banco

- **Banco de Dados**
  - Tabela `users` para gerenciamento dos usuários
  - Tabela `favoritos` relacionando usuários com personagens favoritados

## Funcionalidades

- **Autenticação de Usuário**
  - Registro, login e logout seguros
  - Rotas protegidas para recursos que exigem autenticação

- **Gerenciamento de Personagens**
  - Listagem paginada com filtro por nome
  - Página de detalhes completa para cada personagem
  - Favoritar e desfavoritar personagens, evitando duplicações

- **Favoritos do Usuário**
  - Visualizar lista personalizada de personagens favoritos
  - Acessar detalhes dos personagens salvos localmente
  - Remover personagens favoritos via lista ou página de detalhes

- **Interface e Usabilidade**
  - Navbar responsiva com links para Home, Favoritos e Sobre
  - Feedback visual para ações do usuário (ex: mensagens de sucesso)
  - Design clean com uso de cores escuras e elementos destacados

---

Este projeto visa oferecer uma experiência fluida para explorar personagens da série Rick and Morty, com funcionalidades de personalização e autenticação integradas.

