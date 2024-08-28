FROM php:8.0-apache

COPY index.php /var/www/html/

COPY files/ /var/www/html/files/

EXPOSE 80