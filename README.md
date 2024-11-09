# Chirper

Chirper from [Laravel Bootcamp](https://bootcamp.laravel.com/introduction) + [Turbo Chirper](https://bootcamp.turbo-laravel.com).

## How to run?

This project use Laravel version 11, SQLite for database, and NodeJS version 18 to compile the assets.

1. Clone the project and switch to branch `inertia-svelte`.

```sh
git clone https://github.com/senkulabs/chirper.git
cd chirper
git switch inertia-svelte
```

2. Create `.env` file from `.env.example`.

```sh
cp .env.example .env
```

3. Install composer

```sh
composer install
```

4. Run artisan

```sh
php artisan key:generate
php artisan migrate
php artisan db:seed
```

5. Install NPM assets

```sh
npm install
```

6. Run `php artisan serve` and `npm run dev` in separate tab terminal.

7. Login with email `test@example.com` with password `password` (plain text). Then, navigate to Chirps page and you will see a chirp there.

## SSR weird things?

> I'm not familiar with this behaviour and I'm not sure if this is the expected behaviour.

This project use Inertia + Svelte 5. I get some tricky problem related with SSR.

Here's what I do:

1. Stop the `php artisan serve` and `npm run dev` if you have start them previously.

2. Run `npm run build`. This will generate ssr assets in `bootstrap/ssr` directory.

3. Run `php artisan serve` and `php artisan inertia:start-ssr` in separate tab.

4. Disable JavaScript in you browser.

5. Open http://localhost:8000

6. Explore all page! Each time you navigate the page then browser will refresh the page.

7. Enable JavaScript again then refresh the page or navigate to other page. You will see the browser console will give error message:

```
Unhandled Promise Rejection: HierarchyRequestError: The operation would yield an incorrect node tree.
```
