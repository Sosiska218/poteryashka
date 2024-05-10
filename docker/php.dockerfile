FROM php:8.2-fpm

WORKDIR /var/www/laravel

COPY --from=composer:latest /usr/bin/composer /usr/local/bin/composer

RUN apt-get update && apt-get install -y \
    zlib1g-dev \
    libzip-dev \
    unzip
RUN docker-php-ext-install zip pdo pdo_mysql

