# Me aprofundando em Livewire

> Este repositório foi criado com base no **Curso Gratuito de Laravel Livewire** disponível no YouTube.  
> A ideia é replicar e testar os conceitos aprendidos, utilizando um ambiente Docker com Laravel 11 e PHP 8.3.

**Playlist do Curso no YouTube**: [Curso Gratuito de Laravel Livewire](https://youtube.com/playlist?list=PLVSNL1PHDWvTH6zKPGTfxEdpv1sN0VbeV&si=P7nFmq_-nmi9LPJN)  
**Repositório Oficial do Conteúdo do Curso**: [especializati/laravel-livewire](https://github.com/especializati/laravel-livewire)

---

## Como rodar este projeto localmente

### 1. Clone o repositório base

```sh
git clone https://github.com/gustavogordoni/introduction_livewire.git livewire
cd livewire
```

### 2. Configure o ambiente

```sh
cp .env.example .env
```

### 3. Suba os containers com Docker

```sh
docker compose up -d
```

### 4. Acesse o container da aplicação

```sh
docker compose exec app bash
```

### 5. Instale as dependências do Laravel (PHP)

```sh
composer install
```

### 6. Gere a chave da aplicação

```sh
php artisan key:generate
```

### 7. Rode as migrations

```sh
php artisan migrate
```

### 8. Rode as seeds

```sh
php artisan db:seed
```

### 9. Instale as dependências do frontend (npm)

```sh
npm install
```

### 10. Compile os assets com Vite

```sh
npm run build
```

> Se estiver desenvolvendo, use `npm run dev` para recompilar automaticamente ao salvar os arquivos.

---

## Acesse o projeto

Abra no navegador: [http://localhost:8000](http://localhost:8000)

---

## Usuário de Teste

Caso queira acessar a área de autenticação da aplicação, após rodar as seeds, use as credenciais abaixo (para caso não queria cadastrar um usuário):

- **Usuário**: Test User  
- **Email**: `test@email.com`  
- **Senha**: `password`
