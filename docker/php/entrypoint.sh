#!/usr/bin/env bash
set -e

if [ ! -f .env ] && [ -f .env.example ]; then
    cp .env.example .env
fi

if [ -z "${APP_KEY:-}" ]; then
    php artisan key:generate --force --no-interaction
fi

php artisan storage:link --force >/dev/null 2>&1 || true
php artisan config:clear --no-interaction
php artisan route:clear --no-interaction
php artisan view:clear --no-interaction

exec "$@"
