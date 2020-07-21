FROM php:7.0-apache

COPY shutdown.sh /opt/shutdown.sh
COPY app /var/www/html/
