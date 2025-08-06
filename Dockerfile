FROM php:8.2-cli

# Instala extensiones necesarias
RUN apt-get update && apt-get install -y \
    git zip unzip curl libpq-dev \
    && docker-php-ext-install pdo pdo_pgsql

# Copia Composer desde imagen oficial
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Establece el directorio de trabajo
WORKDIR /var/www/html

# Copia los archivos del proyecto
COPY . .

# Instala las dependencias de Composer
RUN composer install --no-dev --optimize-autoloader

# Crea los directorios necesarios con permisos correctos
RUN mkdir -p storage bootstrap/cache \
    && chmod -R 775 storage bootstrap/cache

# Exponer el puerto en que se ejecutará Laravel
EXPOSE 10000

# Comando para correr Laravel
CMD php artisan config:cache && php artisan migrate --force && php artisan serve --host=0.0.0.0 --port=10000
