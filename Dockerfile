# Build frontend assets
FROM node:22-alpine AS assets
WORKDIR /app
COPY package.json package-lock.json ./
RUN npm ci
COPY vite.config.js ./
COPY resources ./resources
COPY public ./public
RUN npm run build

# PHP / Nginx runtime
FROM serversideup/php:8.4-fpm-nginx

ENV PHP_OPCACHE_ENABLE=1 \
    SSL_MODE=off \
    AUTORUN_ENABLED=false \
    LOG_CHANNEL=stderr

USER root

RUN install-php-extensions intl zip pdo_sqlite sqlite3 gd

WORKDIR /var/www/html

COPY --chown=www-data:www-data . .
COPY --chown=www-data:www-data --from=assets /app/public/build ./public/build
COPY --chmod=755 render-start.sh /etc/entrypoint.d/99-globe-coat.sh

USER www-data

RUN composer install --no-dev --optimize-autoloader --no-interaction --prefer-dist

EXPOSE 8080
