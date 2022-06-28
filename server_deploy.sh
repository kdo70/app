#!/bin/sh
set -e

echo "Deploying application ..."

php artisan migrate --force
php artisan optimize

echo "Application deployed!"
