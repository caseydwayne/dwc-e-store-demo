FROM php:8.3.6-fpm

# Set working directory
WORKDIR /var/www/html

# Install system dependencies
RUN apt-get update && apt-get install -y \
    libsqlite3-dev \
    unzip \
    git \
    curl \
    && docker-php-ext-install pdo pdo_sqlite

# Install Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Copy existing application files
COPY . .

# Set permissions
RUN chown -R www-data:www-data /var/www/html

# Install dependencies
RUN composer install --no-dev --optimize-autoloader

# Expose port 9000 for PHP-FPM
EXPOSE 9000

# Start PHP-FPM server
CMD ["php-fpm"]
