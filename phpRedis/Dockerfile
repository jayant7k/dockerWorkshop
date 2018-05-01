FROM php:7.1-apache
MAINTAINER Jayant <jayant7k@gmail.com>

RUN apt-get update && apt-get install -y net-tools vim
RUN pecl install redis-4.0.0 && docker-php-ext-enable redis

