FROM richarvey/nginx-php-fpm:latest

COPY . .

# Image config
ENV SKIP_COMPOSER 1
ENV WEBROOT /var/www/html/public
ENV PHP_ERRORS_STDERR 1
ENV RUN_SCRIPTS 1
ENV REAL_IP_HEADER 1

# Laravel config
ENV APP_ENV staging
ENV APP_DEBUG false
ENV LOG_CHANNEL stderr

# Allow composer to run as root
ENV COMPOSER_ALLOW_SUPERUSER 1

CMD ["/start.sh"]





# ###################################
# # Use the official PHP 8.1 FPM image from Docker Hub
# FROM php:8.1-fpm

# # Install dependencies
# RUN apt-get update && apt-get install -y \
#     build-essential \
#     libpng-dev \
#     libjpeg62-turbo-dev \
#     libfreetype6-dev \
#     locales \
#     zip \
#     jpegoptim optipng pngquant gifsicle \
#     vim \
#     unzip \
#     git \
#     curl

# # Clear cache
# RUN apt-get clean && rm -rf /var/lib/apt/lists/*

# # Update
# RUN echo "deb http://deb.debian.org/debian buster main" > /etc/apt/sources.list
# RUN echo "deb http://security.debian.org/debian-security buster/updates main" >> /etc/apt/sources.list
# RUN apt-get update


# # RUN apt-get install -y libmysqlclient-dev

# # Install extensions

# RUN docker-php-ext-install pdo_mysql
# RUN docker-php-ext-install mbstring
# RUN docker-php-ext-install zip
# RUN docker-php-ext-install exif
# RUN docker-php-ext-install pcntl

# RUN docker-php-ext-configure gd --with-jpeg=/usr/include/ --with-freetype=/usr/include/
# RUN docker-php-ext-install gd

# # Install composer
# RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

# # Set working directory
# WORKDIR /var/www

# # Remove the default nginx index page
# RUN rm -rf /var/www/html

# # Copy existing application directory
# COPY . /var/www

# # Copy existing application directory permissions
# COPY --chown=www-data:www-data . /var/www

# # Change current user to www
# USER www-data

# # Expose port 9000 and start php-fpm server
# EXPOSE 9000
# CMD ["php-fpm"]
