FROM php:7.4-apache

ENV APACHE_DOCUMENT_ROOT /var/www/html/public

COPY --from=composer /usr/bin/composer /usr/bin/composer

RUN apt-get update \
  && apt-get install -y \
  zlib1g-dev \
  libpng-dev \
  libzip-dev \
  unzip \
  && docker-php-ext-install gd zip

RUN usermod -s /bin/bash www-data \
 && chown www-data:www-data /var/www \
 && sed -ri -e 's!/var/www/html!${APACHE_DOCUMENT_ROOT}!g' /etc/apache2/sites-available/*.conf \
 && sed -ri -e 's!/var/www/!${APACHE_DOCUMENT_ROOT}!g' /etc/apache2/apache2.conf /etc/apache2/conf-available/*.conf