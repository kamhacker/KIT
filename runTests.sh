#!/usr/bin/env bash
cd /var/www/html/todolist;
composer install;
./bin/console doctrine:schema:update --force;
./bin/console doctrine:fixtures:load -n;
./bin/phpunit;
exit $?
