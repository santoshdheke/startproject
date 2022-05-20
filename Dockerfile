# Set master image
FROM php:8.1.6RC1-fpm-alpine

# Set working directory
WORKDIR /app

# Install dependencies
RUN apk update && apk add --no-cache \
    bash \
    alpine-sdk shadow vim curl \
    zip libzip-dev \
    libpng-dev

# Add and Enable PHP-PDO Extenstions
#RUN docker-php-ext-install pdo_mysql zip exif gd

# Add php.ini
#RUN cp /usr/local/etc/php/php.ini-development /usr/local/etc/php/php.ini

# Add nodejs and npm
#RUN apk add --update nodejs npm

# Install Composer
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

# Remove Cache
RUN rm -rf /var/cache/apk/*

# Add user for laravel application
RUN groupadd -g 1000 www && useradd -u 1000 -ms /bin/bash -g www www

# Copy existing application directory contents & permissions
COPY --chown=www:www . .

# Change current user to www
USER www

# Expose port 9000 and start php-fpm server
EXPOSE 9000
CMD ["php-fpm"]
#CMD ["php", "artisan", "serve", "--port=9000", "--host=0.0.0.0"]

