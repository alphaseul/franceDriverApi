ARG PHP_VERSION=8.0

# "php" stage
FROM php:${PHP_VERSION}-fpm-alpine

RUN apk update --no-cache && apk add --no-cache bash git

RUN php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');" && php composer-setup.php && php -r "unlink('composer-setup.php');" && mv composer.phar /usr/local/bin/composer

# symfony CLI 
RUN wget https://get.symfony.com/cli/installer -O - | bash &&  mv /root/.symfony/bin/symfony /usr/local/bin/symfony

WORKDIR /var/www/html