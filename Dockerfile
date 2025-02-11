# Usa la imagen oficial de PHP 8.2 FPM
FROM php:8.2-fpm

# Instala las dependencias necesarias para Laravel y PHP
RUN apt-get update && apt-get install -y \
    libpng-dev \
    libjpeg-dev \
    libfreetype6-dev \
    libzip-dev \
    unzip \
    git \
    && docker-php-ext-configure gd --with-freetype --with-jpeg \
    && docker-php-ext-install gd zip pdo pdo_mysql

# Instala Composer
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

# Copia el archivo composer.json y composer.lock (si existe)
WORKDIR /var/www/html
COPY composer.json composer.lock ./

# Instala las dependencias de Laravel
RUN composer install --no-scripts --no-autoloader

# Copia el resto del proyecto (código de la aplicación Laravel)
COPY . .

# Genera el autoload y las optimizaciones de Composer
RUN composer dump-autoload --optimize

# Establece los permisos adecuados para los directorios de Laravel
RUN chown -R www-data:www-data /var/www/html
RUN chmod -R 775 /var/www/html/storage /var/www/html/bootstrap/cache

# Exponer el puerto 9000 para PHP-FPM
EXPOSE 9000

# Comando por defecto para ejecutar el contenedor (iniciar PHP-FPM)
CMD ["php-fpm"]
