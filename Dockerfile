FROM php:7.4-fpm

# Copy composer.lock and composer.json into the working directory
COPY composer.lock composer.json /var/www/html/

# Set working directory
WORKDIR /var/www/html/

# Install dependencies for the operating system software
RUN apt-get update && apt-get install -y \
  git \
	curl \
	libpng-dev \
	libonig-dev \
	libxml2-dev \
	zip \
	unzip \
	libzip-dev \
	libjpeg-dev

# Clear cache
RUN apt-get clean && rm -rf /var/lib/apt/lists/*

# Install extensions for php
RUN docker-php-ext-install pdo_mysql mbstring zip exif pcntl
RUN docker-php-ext-configure gd --with-freetype --with-jpeg
RUN docker-php-ext-install gd

# Install composer (php package manager)
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer


RUN groupadd -g 1000 www
RUN useradd -u 1000 -md /bin/bash -g www www

# Copy existing application directory contents to the working directory
COPY . /var/www/html

# Assign permissions of the working directory to the www-data user
RUN chown --chown=www:www . /var/www/html

USER www

RUN composer install

# Expose port 9000 and start php-fpm server (for FastCGI Process Manager)
EXPOSE 9000
CMD ["php-fpm"]