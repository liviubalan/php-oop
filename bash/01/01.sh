#!/bin/bash

# Get CentOS version
cat /etc/centos-release

# https://www.digitalocean.com/community/tutorials/how-to-install-linux-nginx-mysql-php-lemp-stack-on-centos-7

# Add the CentOS 7 EPEL repository
sudo yum -y install epel-release

# Install Nginx
sudo yum -y install nginx

# Start the Nginx service
sudo systemctl start nginx

# Check using your browser at http://<host>/

# Enable Nginx to start on boot
sudo systemctl enable nginx

# Install the Remi repository for CentOS 7
sudo yum -y install http://rpms.remirepo.net/enterprise/remi-release-7.rpm

# Check which PHP 7+ releases are available in the Remi repository
#yum --disablerepo="*" --enablerepo="remi-safe" list php[7-9][0-9].x86_64

# Install "yum-config-manager" in order to run "yum-utils"
sudo yum -y install yum-utils

# install PHP 7.4
sudo yum-config-manager --enable remi-php74

# Install all the required packages to get PHP 7.4 set up within Nginx
sudo yum -y install php php-fpm

# Confirm that PHP is available
#php --version
#php --help
#php -a

#user = nginx
#group = www-data
sudo vi /etc/php-fpm.d/www.conf

# listen = /var/run/php-fpm/php-fpm.sock;
sudo vi /etc/php-fpm.d/www.conf

#listen.owner = nginx
#listen.group = www-data
#listen.mode = 0660
sudo vi /etc/php-fpm.d/www.conf

# Enable and start the php-fpm service
sudo systemctl start php-fpm

# Use "resources/default.conf"
sudo vi /etc/nginx/conf.d/default.conf

# Restart Nginx
sudo systemctl restart nginx

# Change the ownership of the default Nginx document root
sudo chown -R "$USER:www-data" /usr/share/nginx/html/

# Create a new PHP file called info.php
vi /usr/share/nginx/html/info.php

# Create symlink
sudo ln -s /usr/share/nginx/html /var/www/workshop
