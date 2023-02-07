FROM php:8.1-fpm-alpine

ENV TZ Asia/Tokyo
ENV COMPOSER_ALLOW_SUPERUSER 1

# install Lib
RUN apk update && \
    apk add --no-cache --virtual .php-builds oniguruma-dev git zip unzip

# add php,apache-module
RUN docker-php-ext-install mbstring pdo pdo_mysql && \
    docker-php-ext-enable mbstring

# php.conf php-fpm.conf
COPY conf/php.ini /usr/local/etc/php/php.ini
COPY conf/docker.conf /usr/local/etc/php-fpm.d/docker.conf

# install Composer
RUN curl -sS https://getcomposer.org/installer | php && \
    mv composer.phar /usr/local/bin/composer && \
    chmod +x /usr/local/bin/composer

#install php-xdebug
# Add xdebug
RUN apk add --no-cache --virtual .build-deps $PHPIZE_DEPS
RUN apk add --update linux-headers
RUN pecl install xdebug-3.1.5
RUN docker-php-ext-enable xdebug
RUN apk del -f .build-deps

WORKDIR /app