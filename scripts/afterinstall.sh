#!/usr/bin/bash

cd /var/www/html;
composer update --no-interction;
php artisan key:generate --force;
