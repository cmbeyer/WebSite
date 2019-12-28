FROM bigbeyer/website_1:latest

RUN docker-php-ext-install mysqli

COPY /src/ /var/www/html/
