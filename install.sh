#!/bin/bash

mkdir -p /root/tmp && cd /root/tmp

curl -fsSL https://download.docker.com/linux/ubuntu/gpg | sudo apt-key add -
add-apt-repository "deb [arch=amd64] https://download.docker.com/linux/ubuntu $(lsb_release -cs) stable edge" -y

sudo apt-get install software-properties-common -y
sudo add-apt-repository ppa:ondrej/php -y

apt-get update
apt-get upgrade -y

apt-get install -y htop tree pv mc git curl wget unzip

apt-get install -y docker-ce

apt-get install -y nginx

apt-get install -y php7.4 php7.4-bcmath php7.4-bz2 php7.4-cli php7.4-common php7.4-curl php7.4-fpm php7.4-gd \
php7.4-imap php7.4-intl php7.4-json php7.4-mbstring php7.4-mysql php7.4-opcache php7.4-pgsql php7.4-readline \
php7.4-sqlite3 php7.4-tidy php7.4-xml php7.4-zip php-amqp php-apcu php-gearman php-geoip php-imagick php-memcache \
php-mongodb php-oauth php-smbclient php-solr php-ssh2 php-uploadprogress php-uuid php-yaml php-xdebug
