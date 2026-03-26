#!/bin/bash
# build.sh

# because we are on dreamhost we don't have access to things easily, so we have to do some work to get things working

# so this script will be run on the server, and it will build the project and then move the built files to the correct location

git pull

php-8.4 ~/bin/composer.phar install
npm install
# npm run build # build doesn't work here

php-8.4 ~/bin/composer.phar dump-autoload -o
php-8.4 artisan config:cache
php-8.4 artisan route:cache
php-8.4 artisan view:cache
php-8.4 artisan migrate --force
