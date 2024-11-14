# Chirper

Chirper from [Laravel Bootcamp](https://bootcamp.laravel.com/introduction) + [Turbo Chirper](https://bootcamp.turbo-laravel.com).

## How to run?

1. Clone this repo and switch to `blade` branch with `git switch` command.

2. Create `.env` file and install dependencies.

```sh
touch .env.example .env
composer install
npm install
```

3. Run migration and seeder. By default, you will get user with email `text@example.com` with password is `password` (plain text).

```sh
php artisan migrate
php artisan db:seed
```

4. Run project with command `composer run dev`.