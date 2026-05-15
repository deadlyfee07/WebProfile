# WebProfile — Laravel 12 project

## Quick start

```sh
composer setup            # install, create .env, key:generate, migrate, npm install + build
```

## Common commands

| Task | Command |
|------|---------|
| Dev server | `composer dev` (concurrently: artisan serve + queue:listen + pail logs + vite) |
| Run tests | `composer test` (runs `artisan config:clear` then `artisan test`) |
| Run all tests | `php artisan test` |
| Run single test | `php artisan test --filter test_name` |
| Run Unit tests | `php artisan test --testsuite=Unit` |
| Run Feature tests | `php artisan test --testsuite=Feature` |
| Code style | `./vendor/bin/pint` (Laravel Pint) |
| Build assets | `npm run build` (Vite + Tailwind v4) |
| Dev assets | `npm run dev` (Vite hot-reload) |

## Project structure

```
app/          → PSR-4 App\ namespace (Http/, Models/User.php, Providers/)
bootstrap/    → Framework boot + cache
config/       → All config (app, auth, cache, database, queue, session, etc.)
database/     → Migrations, factories, seeders (SQLite by default)
resources/    → Blade views, CSS, JS (Vite entry: resources/js/app.js)
routes/       → web.php, console.php
tests/        → Unit + Feature (extends Tests\TestCase)
```

## Test configuration

- Tests run with SQLite `:memory:`, no real DB needed
- All cache/session/queue/broadcast drivers forced to array/null/sync
- Unit tests extend `PHPUnit\Framework\TestCase`, not the app TestCase
- Feature tests extend `Tests\TestCase` (uses Laravel app)
- `RefreshDatabase` trait is NOT applied by default (opt-in in test class)

## Framework quirks

- DB defaults to SQLite (file `database/database.sqlite`), no MySQL/Postgres required
- Session, cache, queue all default to `database` driver (not file/array) in local dev
- `SESSION_DRIVER=database` requires running session table migration (included in default migrations)
- After adding a migration run `php artisan migrate:fresh --seed` to reset + seed
- Laravel Pint (`vendor/bin/pint`) is the formatter — run before committing

## Key dependencies

- Laravel 12, PHP ^8.2
- Vite 7 + Laravel Vite Plugin 2 + Tailwind CSS 4 (via `@tailwindcss/vite`)
- Testing: PHPUnit 11, Mockery, Collision, Faker
- Dev: Laravel Sail (Docker), Laravel Pail (log viewer), Laravel Pint (style)
