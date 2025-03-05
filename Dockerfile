# Use an official PHP 8.3 image as a parent image
FROM php:8.3.6-fpm-alpine

# Set working directory
WORKDIR /var/www/html

# Install system dependencies
RUN apk update && apk add --no-cache \
    git \
    zip \
    unzip \
    libzip-dev \
    sqlite-dev \
    icu-dev \
    $PHPIZE_DEPS

# Install PHP extensions
RUN pecl install zip \
    && docker-php-ext-enable zip \
    && docker-php-ext-install pdo_sqlite intl

# Install Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Copy application files (excluding vendor and node_modules initially)
COPY . .

# Install PHP dependencies
RUN composer install --no-interaction --no-dev --optimize-autoloader

# Create storage link
RUN php artisan storage:link

# Copy environment file
COPY .env.example .env

# Generate application key
RUN php artisan key:generate

# Set permissions
RUN chown -R www-data:www-data /var/www/html \
    && chmod -R 775 /var/www/html/storage \
    && chmod -R 775 /var/www/html/bootstrap/cache

# Expose port 9000 (for FPM)
EXPOSE 9000

# Start PHP-FPM
CMD ["php-fpm"]