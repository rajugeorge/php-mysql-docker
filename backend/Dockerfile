FROM php:7.4-apache

RUN apt-get update -y

RUN docker-php-ext-install \
    pdo \
    pdo_mysql \
    mysqli

RUN a2enmod rewrite

EXPOSE 80

# Update Php Settings
COPY custom.ini $PHP_INI_DIR/conf.d
COPY src/ /var/www/html
