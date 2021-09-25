FROM php:7.2-apache
RUN docker-php-ext-install mysqli
RUN ADD init_db.sh /init_db.sh
RUN init_db.sh