FROM php:7.1-fpm

# Instalar dependencias
RUN apt-get update && apt-get install -y \
    libzip-dev zip unzip git curl libpng-dev libjpeg-dev libfreetype6-dev \
    && docker-php-ext-install pdo_mysql mbstring zip

# Instalar Composer 1 (Laravel 5.4 no soporta Composer 2)
RUN curl -sS https://getcomposer.org/installer | php -- --version=1.10.26 && \
    mv composer.phar /usr/local/bin/composer

WORKDIR /var/www

COPY . .

RUN composer install --no-interaction --no-scripts

CMD ["php-fpm"]
