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

### 2. Suba os containers com Docker

```sh
docker compose up -d
```

### 3. Configure o ambiente

```sh
cp .env.example .env
```

### 4. Acesse o container da aplicação

```sh
docker compose exec app bash
```

### 5. Instale as dependências

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

---

## Acesse o projeto

[http://localhost:8000](http://localhost:8000)

---
