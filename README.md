# Chirper

Chirper from [Laravel Bootcamp](https://bootcamp.laravel.com/introduction) + [Turbo Chirper](https://bootcamp.turbo-laravel.com).

## How to run?

This project use InertiaJS version 2 (beta) + Svelte 5 components.

1. Git clone and switch to branch `inertia-svelte`

```sh
git clone https://github.com/senkulabs/chirper.git
cd chirper
git switch inertia-svelte
```

2. Install deps.

```sh
composer install
npm install
```

3. Setup config

```sh
cp .env.example .env
php artisan key:generate
# this command will use sqlite as DB driver.
php artisan migrate
php artisan db:seed
```

4. Run the project and open in http://localhost:8000

```sh
composer run dev
```
