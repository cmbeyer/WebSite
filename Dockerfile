FROM bigbeyer/website_1:base

RUN docker-php-ext-install mysqli

COPY /src/ /var/www/html/
