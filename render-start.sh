#!/usr/bin/env bash
set -euo pipefail

cd /var/www/html

# Render injects PORT (default 10000); serversideup nginx must listen on it.
export NGINX_HTTP_PORT="${PORT:-8080}"

mkdir -p database storage/framework/{cache,sessions,views} storage/logs bootstrap/cache
touch database/database.sqlite

# Free Render disks are ephemeral — seed on boot so the CMS always has content.
php artisan migrate --force
php artisan db:seed --force
php artisan storage:link || true
php artisan config:cache
php artisan route:cache
php artisan view:cache
