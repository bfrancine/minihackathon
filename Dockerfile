FROM php:8.2-cli

RUN apt-get update && apt-get install -y \
    git zip unzip curl libpq-dev \
    && docker-php-ext-install pdo pdo_pgsql

COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

WORKDIR /var/www/html

COPY . .

RUN composer install --no-dev --optimize-autoloader

RUN chmod -R 755 storage bootstrap/cache

EXPOSE 10000

CMD php artisan config:cache && php artisan migrate --force && php artisan serve --host 0.0.0.0 --port 10000
