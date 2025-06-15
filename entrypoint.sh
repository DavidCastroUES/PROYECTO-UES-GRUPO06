#!/bin/sh
set -e

# Ejecuta las migraciones de la base de datos
php artisan migrate --force

# Ejecuta el servidor de Laravel
php artisan serve --host=0.0.0.0 --port=8080
