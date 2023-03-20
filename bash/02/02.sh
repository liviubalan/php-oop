#!/bin/bash

# Change current working directory
cd /var/www/workshop/

# See: https://getcomposer.org/download/
php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');"
php -r "if (hash_file('sha384', 'composer-setup.php') === '55ce33d7678c5a611085589f1f3ddf8b3c52d662cd01d4ba75c0ee0459970c2200a51f492d557530c71c15d8dba01eae') { echo 'Installer verified'; } else { echo 'Installer corrupt'; unlink('composer-setup.php'); } echo PHP_EOL;"
php composer-setup.php
php -r "unlink('composer-setup.php');"

cd ../
sudo mkdir symfony
sudo chmod 777 symfony/
php workshop/composer.phar create-project symfony/skeleton:"^5.4" symfony
cd symfony/

sudo yum -y install php-xml
rm -rf symfony/*
php workshop/composer.phar create-project symfony/skeleton:"^5.4" symfony
php bin/console

# See: https://www.digitalocean.com/community/tutorials/how-to-set-up-nginx-server-blocks-on-centos-7
# See: https://symfony.com/doc/5.4/setup/web_server_configuration.html
sudo vi /etc/nginx/conf.d/default.conf
# Paste "resources/symfony.conf"

sudo systemctl restart nginx
