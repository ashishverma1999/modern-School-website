#!/usr/bin/env bash

set -o errexit

mkdir -p database storage/framework/cache/data storage/framework/sessions storage/framework/views bootstrap/cache
touch database/database.sqlite

php artisan storage:link --force >/dev/null 2>&1 || true
php artisan config:clear --no-interaction
php artisan migrate --force --no-interaction
php artisan config:cache --no-interaction
php artisan route:cache --no-interaction
php artisan view:cache --no-interaction

exec php artisan serve --host=0.0.0.0 --port="${PORT:-10000}"
