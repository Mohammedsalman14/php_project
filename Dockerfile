# Use the official PHP image as base
FROM php:7.4-apache

# Set working directory inside the container
WORKDIR /var/www/html

# Install system dependencies
RUN apt-get update && apt upgrade -y && apt-get install -y --no-install-recommends \
    git \
    unzip \
    && rm -rf /var/lib/apt/lists/*

# Install Composer
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

# Copy the PHP files from your host to the container
COPY ./app/ /var/www/html/

# Expose port 80 to the outside world
EXPOSE 80
