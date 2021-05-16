FROM php:7.3-fpm
COPY app/. /var/www/
#COPY var/www/. /sour/app/

EXPOSE 9000