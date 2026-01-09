# Image de base
FROM php:8.2-apache

# Activation des extensions PHP utiles
RUN docker-php-ext-install \
    mysqli \
    pdo \
    pdo_mysql

# Copie du code source vers le dossier web Apache
COPY src/ /var/www/html/

# Affectation des droits sur le dossier web
RUN chown -R www-data:www-data /var/www/html

