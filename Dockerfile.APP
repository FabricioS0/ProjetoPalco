FROM php:8.1-apache

# Instala extensões necessárias
RUN docker-php-ext-install mysqli pdo pdo_mysql

# Habilita mod_rewrite (caso precise de URLs amigáveis)
RUN a2enmod rewrite

# Reinicia o Apache
CMD ["apache2-foreground"]
