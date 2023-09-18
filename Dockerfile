FROM php:8.1-fpm
RUN apt-get update && apt-get install -y \
    libpq-dev \
    git \
    curl \
    zip \
    vim \
    unzip \
    && docker-php-ext-install pdo_mysql
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer
WORKDIR /var/www/html
RUN chown -R www-data:www-data /var/www/html