# Chirper

Chirper from [Laravel Bootcamp](https://bootcamp.laravel.com/introduction) + [Turbo Chirper](https://bootcamp.turbo-laravel.com).

## Hotwire Turbo

This branch is a code sample of tutorial of build Chirper with Laravel Hotwire Turbo.

## Specifications

- Laravel version 10
- PHP version 8.2
- Sqlite for database

## How to run?

- Clone this repo
- Switch to branch `hotwire-turbo` with command below

```bash
git switch hotwire-turbo
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
```

Login two users on different browsers to test if Broadcasting success.

```bash
User 1
email: kresna@example.com
password: 12345678

User 2
email: satya@example.com
password: 12345678
```

- Install soketi with Docker as alternative of Pusher.

```bash
docker run -p 6001:6001 -p 9601:9601 quay.io/soketi/soketi:1.4-16-debian
```

- Change BROADCAST_DRIVER to `pusher` and update **PUSHER_*** value in .env file.

```bash
BROADCAST_DRIVER=pusher

PUSHER_APP_ID="app-id"
PUSHER_APP_KEY="app-key"
PUSHER_APP_SECRET="app-secret"
PUSHER_HOST=127.0.0.1
PUSHER_PORT=6001
PUSHER_SCHEME=http
PUSHER_APP_CLUSTER=mt1
```

Test create chirp from one account to another account in different browser then it works.
