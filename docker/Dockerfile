FROM php:8.2-fpm-alpine

RUN apk update && \
    apk add --no-cache \
    git \
    curl \
    libpng-dev \
    libjpeg-turbo-dev \
    libwebp-dev \
    libxpm-dev \
    freetype-dev \
    libzip-dev \
    nodejs \
    npm

RUN docker-php-ext-configure gd --with-jpeg --with-freetype --with-webp --with-xpm && \
    docker-php-ext-install gd pdo_mysql opcache zip

RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

WORKDIR /app

COPY . .

RUN composer install

RUN npm install

RUN npm run build