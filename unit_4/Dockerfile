# Verwende das offizielle PHP Apache-Image
FROM php:apache

# Installation der notwendigen Pakete für PostgreSQL
RUN apt-get update && apt-get install -y libpq-dev && docker-php-ext-install pdo pdo_pgsql

# Lade RedBeanPHP herunter und entpacke es in den Dokumenten-Root
RUN curl -L https://redbeanphp.com/downloadredbeanversion.php?f=all-drivers -o redbeanphp.tar.gz && \
    tar -xvzf redbeanphp.tar.gz -C /var/www/html/ && \
    rm redbeanphp.tar.gz

# Setze den Arbeitsordner auf das Apache-Webverzeichnis
WORKDIR /var/www/html
