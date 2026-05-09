#!/usr/bin/env bash

set -o errexit

php -v

composer install --no-dev --optimize-autoloader

npm install
npm run build

php artisan config:cache
php artisan route:cache
php artisan view:cache