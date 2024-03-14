# Use the official PHP image as base
FROM php:7.4-apache

# Set working directory inside the container
WORKDIR /var/www/html

CMD [ "composer require --dev phpunit/phpunit" ] 

# Copy the PHP files from your host to the container
COPY ./app/ /var/www/html/


# Expose port 80 to the outside world
EXPOSE 80
