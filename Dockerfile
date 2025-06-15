FROM php:7.1-fpm

# Instalar dependencias
RUN apt-get update && apt-get install -y \
    zip unzip git curl libzip-dev libpng-dev libjpeg-dev libfreetype6-dev \
    && docker-php-ext-install pdo_mysql mbstring zip gd

# Instala Composer 1.10.26 (compatible con Laravel 5.4)
RUN curl -sS https://getcomposer.org/installer | php -- --version=1.10.26 && \
    mv composer.phar /usr/local/bin/composer

# Verifica la versión de Composer
RUN composer --version

WORKDIR /var/www

COPY . .

RUN composer install --no-interaction --no-scripts --prefer-dist -vvv

RUN php artisan migrate


COPY entrypoint.sh /usr/local/bin/entrypoint.sh
RUN chmod +x /usr/local/bin/entrypoint.sh

EXPOSE 8080
ENTRYPOINT ["entrypoint.sh"]

# CMD ["php", "artisan", "serve", "--host=0.0.0.0", "--port=8080"]

