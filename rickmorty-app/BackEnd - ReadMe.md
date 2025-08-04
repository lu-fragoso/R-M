# 📁 **README do Backend (Laravel - API)**

### 📝 `backend/README.md`
```markdown
# Rick and Morty - Backend

Este é o backend do projeto Rick and Morty. Ele gerencia autenticação de usuários e persistência dos personagens favoritados por cada usuário.

## 🚀 Funcionalidades

- API para login, registro e logout
- Gerenciamento de favoritos por usuário
- Integração com a API pública Rick and Morty
- Relacionamento User ↔ PersonagemFavoritado

## 💻 Tecnologias

- Laravel 10
- MySQL ou SQLite
- Autenticação via Laravel Breeze
- Eloquent ORM
- API RESTful

## 📦 Instalação

1. Clone o repositório:
   ```bash
    git clone https://github.com/lu-fragoso/R-M.git
    cd R-M

2. Instale as dependências:
   ```bash
   composer install
   npm install && npm run dev 

3. Copie o arquivo .env e configure:
   ```bash
   cp .env.example .env
   php artisan key:generate

4. onfigure o banco de dados no .env e rode as migrations:
   ```bash
   php artisan migrate

5. Inicie o servidor:
   ```bash
    php artisan serve


## 🙋‍♂️ Autor
Desenvolvido por [Lucas Fragoso](https://github.com/lu-fragoso)
