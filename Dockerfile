FROM php:8.2-apache

RUN apt-get update && apt-get install -y \
    libpng-dev libjpeg-dev libfreetype6-dev libwebp-dev libxpm-dev \
    libexif-dev \
    zip unzip \
    && docker-php-ext-configure gd --with-freetype --with-jpeg --with-webp --with-xpm \
    && docker-php-ext-install gd exif pdo pdo_mysql \
    && docker-php-ext-enable exif \
    && apt-get clean

RUN a2enmod rewrite

COPY apache/default.conf /etc/apache2/sites-available/000-default.conf
RUN a2ensite 000-default.conf

COPY apache/.htpasswd /etc/apache2/.htpasswd    

RUN mkdir -p /var/www/html/storage /var/www/html/bootstrap/cache
RUN chown -R www-data:www-data /var/www/html/storage /var/www/html/bootstrap/cache
RUN chmod -R 775 /var/www/html/storage /var/www/html/bootstrap/cache

WORKDIR /var/www/html
