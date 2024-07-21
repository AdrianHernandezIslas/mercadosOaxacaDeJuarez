FROM php:5.6-apache

RUN a2enmod rewrite
# Instalar extensiones PHP necesarias
RUN docker-php-ext-install mysql

# Copiar archivos de la aplicación
COPY app/ /var/www/html/

RUN chmod -R 755 /var/www/html/assets/recursos \  
    && chown -R www-data:www-data /var/www/html/assets/recursos

RUN service apache2 restart