#!/bin/bash

# Change current working directory
cd /var/www/symfony/

git clone git@github.com:liviubalan/php-oop-symfony.git .
cp ../workshop/composer.phar .
git status
php composer.phar install

php composer.phar require symfony/orm-pack
php composer.phar require --dev symfony/maker-bundle
php composer.phar require doctrine/annotations

# See: https://blog.devart.com/how-to-check-mysql-version.html
vi .env
#DATABASE_URL="mysql://root:@gen-mysql148994-all-dev.mwp-lannister.e5.c.emag.network:13543/emag?serverVersion=5.7"

php bin/console doctrine:database:create
php bin/console make:entity
vi src/Entity/WorkshopProduct.php

php bin/console make:migration
# See: https://akashicseer.com/software-development/how-to-fix-unknown-database-type-enum-requested-doctrinedbalplatformsmysql80platform-may-not-support-it/

vi .env
# DATABASE_URL="mysql://root:@gen-mysql148994-all-dev.mwp-lannister.e5.c.emag.network:13543/workshop?serverVersion=5.7"

php bin/console make:migration
php bin/console doctrine:migrations:migrate

php bin/console make:entity
php bin/console make:migration
php bin/console doctrine:migrations:migrate

vi config/routes.yaml
#product:
#    path: /product
#    controller: App\Controller\ProductController::createProduct

php bin/console dbal:run-sql 'SELECT * FROM product'

# See: https://symfony.com/doc/current/validation.html
php composer.phar require symfony/validator

# 4
php bin/console make:crud Project
php composer.phar require form twig-bundle security-csrf annotations
php bin/console make:crud Project

chmod 777 /var/lib/php/session/

