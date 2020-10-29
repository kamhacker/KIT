FROM php:7.4-fpm-alpine

#Apk installer
RUN apk --no-cache update && apk --no-cache add bash git \
    && git config --global user.name "kamal.aiboussi" \
    && git config --global user.email "kamal.aiboussi@gmail.com"

RUN docker-php-ext-install pdo pdo_mysql

# Install composer
RUN php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');" \
    && php composer-setup.php \
    && php -r "unlink('composer-setup.php');" \
    && mv composer.phar /usr/local/bin/composer

# Install symfony
RUN  curl -sS https://get.symfony.com/cli/installer | bash \
&& mv /root/.symfony/bin/symfony /usr/local/bin/symfony

WORKDIR /var/www/html
