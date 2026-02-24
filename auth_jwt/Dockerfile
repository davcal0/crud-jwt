FROM php:8.2-cli

# Instalar dependencias del sistema
RUN apt-get update && apt-get install -y \
    git \
    unzip \
    curl \
    libzip-dev \
    libonig-dev \
    libpng-dev \
    libxml2-dev \
    default-mysql-client \
    && docker-php-ext-install pdo_mysql mbstring zip exif pcntl

# Instalar Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Crear directorio de trabajo
WORKDIR /var/www

# Copiar archivos del proyecto
COPY . .

# Instalar dependencias de Laravel
RUN composer install

# Exponer puerto 8000
EXPOSE 8000

# Comando por defecto
CMD php artisan serve --host=0.0.0.0 --port=8000