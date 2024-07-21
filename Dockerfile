FROM php:5.6-apache

RUN a2enmod rewrite
# Instalar extensiones PHP necesarias
RUN docker-php-ext-install mysql

# Copiar archivos de la aplicación
COPY app/ /var/www/html/

RUN chmod -R 755 /var/www/html/assets/recursos \  
    && chown -R www-data:www-data /var/www/html/assets/recursos

# Cambiar el puerto de escucha de Apache de 80 a 8080
RUN sed -i 's/Listen 80/Listen 8080/' /etc/apache2/ports.conf /etc/apache2/sites-available/000-default.conf

RUN service apache2 restart