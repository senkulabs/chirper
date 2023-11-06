# Chirper

Chirper from [Laravel Bootcamp](https://bootcamp.laravel.com/introduction) + [Turbo Chirper](https://bootcamp.turbo-laravel.com).

## Livewire

This branch is a code sample of tutorial of build Chirper with Laravel Livewire (class mode).

## Specifications

- Laravel version 10
- PHP version 8.2
- NodeJS version >= 16
- Sqlite for database

## How to run?

- Clone this repo
- Switch to branch `livewire` with command below

```bash
git switch livewire
```

- Install project with commands below

```bash
# 1st tab terminal
cp .env.example
composer install
php artisan key:generate
php artisan migrate
php artisan db:seed
php artisan serve

# 2nd tab terminal
npm install
npm run dev
```
