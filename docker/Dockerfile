FROM php:8.2-fpm-alpine

WORKDIR /var/www/html

COPY --chown=www-data:www-data ./src .

EXPOSE 9000

CMD ["php-fpm"]
