FROM php:7.4-apache
RUN docker-php-ext-install pdo pdo_mysql
COPY lumus8x/ /var/lumus8x/html