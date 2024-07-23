FROM php:7.3-apache

# Configurar PHP para usar PostgreSQL
RUN apt-get update && apt-get install -y \
    libpq-dev \
    && rm -rf /var/lib/apt/lists/* \
    && docker-php-ext-configure pdo_pgsql --with-pdo-pgsql=/usr/local/pgsql \
    && docker-php-ext-install pdo_pgsql pgsql

RUN docker-php-ext-enable pdo_pgsql pgsql

# Establecer el driver PDO para PostgreSQL en el php.ini
RUN echo "extension=pdo_pgsql.so" >> "$PHP_INI_DIR/php.ini"
RUN echo "extension=pgsql.so" >> "$PHP_INI_DIR/php.ini"

# Habilitar mod_rewrite de Apache
RUN a2enmod rewrite

# 4. start with base php config, then add extensions
RUN mv "$PHP_INI_DIR/php.ini-development" "$PHP_INI_DIR/php.ini"

# Configurar ServerName para Apache
RUN echo "ServerName localhost" >> /etc/apache2/apache2.conf

# Copiar archivos de la aplicación
COPY app/ /var/www/html/

# Ajustar permisos de archivos y directorios
RUN chmod -R 755 /var/www/html/assets/recursos \
    && chown -R www-data:www-data /var/www/html/assets/recursos

# Cambiar el puerto de escucha de Apache de 80 a 8080 si es necesario
RUN sed -i 's/Listen 80/Listen 8080/' /etc/apache2/ports.conf /etc/apache2/sites-available/000-default.conf

# Reiniciar Apache para aplicar cambios
RUN service apache2 restart

# CMD para ejecutar Apache en primer plano al iniciar el contenedor
CMD ["apache2ctl", "-D", "FOREGROUND"]
