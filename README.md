## Orbayu API

[![Build](https://github.com/orbayu-app/api/actions/workflows/build.yml/badge.svg?branch=master)](https://github.com/orbayu-app/api/actions/workflows/build.yml)

Backend service for the Orbayu app — tides, weather and more for Asturias.

Built with Laravel 13, PHP 8.4.

### Requirements

- Docker (see [infra](https://github.com/orbayu-app/infra) repo for local setup)
- Or PHP 8.4 + Composer installed locally

### Local development

The easiest way to run the project is through the [infra](https://github.com/orbayu-app/infra) repo. It sets up PHP, Nginx and all dependencies in Docker.

If you prefer running without Docker:

```bash
composer install
cp .env.example .env
php artisan key:generate
php artisan serve
```

### Code quality

```bash
composer check        # run all checks (lint → analyze → test)
composer lint         # code style (PHPCS + Slevomat)
composer lint:fix     # auto-fix code style
composer analyze      # static analysis (PHPStan + Larastan)
composer test         # tests (PHPUnit)
```

### API endpoints

| Method | URL | Description |
|--------|-----|-------------|
| GET | `/healthz` | Health check |

### Links

- [Infra repo](https://github.com/orbayu-app/infra) — Docker, Nginx, scripts
- [Mobile repo](https://github.com/orbayu-app/mobile) — React Native app
- [Docs repo](https://github.com/orbayu-app/docs) — Documentation, ADRs, API spec
