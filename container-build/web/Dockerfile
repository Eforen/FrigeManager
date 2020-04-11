FROM php:7.2-apache
RUN apt-get update \
 && apt-get install -y vim git zlib1g-dev mysql-client-* libzip-dev \
 && docker-php-ext-install zip mysqli pdo_mysql \
 && pecl install xdebug \
 && docker-php-ext-enable xdebug \
 && a2enmod rewrite
RUN echo 'xdebug.remote_enable=on' >> /usr/local/etc/php/conf.d/xdebug.ini \
 && echo 'xdebug.remote_host=host.docker.internal' >> /usr/local/etc/php/conf.d/xdebug.ini \
 && sed -i 's!/var/www/html!/var/www/public!g' /etc/apache2/sites-available/000-default.conf \
 && (rm -R /var/www/html || echo 'No html /var/www/html folder') \
 && mkdir /var/www/public \
 && curl -sS https://getcomposer.org/installer \
  | php -- --install-dir=/usr/local/bin --filename=composer \
 && echo "AllowEncodedSlashes On" >> /etc/apache2/apache2.conf
RUN chown -R www-data:www-data /var/www \
 && chmod --recursive g+rwX /var/www
WORKDIR /var/www
