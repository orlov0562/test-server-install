#!/bin/bash

IP=$(curl -s https://md5calc.com/ip.plain)

curl -fsSL https://download.docker.com/linux/ubuntu/gpg | sudo apt-key add -
add-apt-repository "deb [arch=amd64] https://download.docker.com/linux/ubuntu $(lsb_release -cs) stable edge" -y

apt-get install software-properties-common -y
add-apt-repository ppa:ondrej/php -y
add-apt-repository ppa:ondrej/pkg-gearman -y

apt-get update
apt-get upgrade -y

export LC_ALL=en_US.UTF-8

apt-get install -y htop tree pv mc git curl unzip apache2-utils

apt-get install -y docker-ce docker-compose

apt-get install -y nginx

apt-get install -y php7.4 php7.4-bcmath php7.4-bz2 php7.4-cli php7.4-common php7.4-curl php7.4-fpm php7.4-gd \
php7.4-imap php7.4-intl php7.4-json php7.4-mbstring php7.4-mysql php7.4-opcache php7.4-pgsql php7.4-readline \
php7.4-sqlite3 php7.4-tidy php7.4-xml php7.4-zip php-amqp php-apcu php-gearman php-geoip php-imagick php-memcache \
php-mongodb php-oauth php-smbclient php-solr php-ssh2 php-uploadprogress php-uuid php-yaml php-xdebug

cp ./php-fpm-php.ini /etc/php/7.4/fpm/php.ini
cp ./php-xdebug.ini /etc/php/7.4/mods-available/xdebug.ini
systemctl restart php7.4-fpm

cp ./nginx-default.conf /etc/nginx/sites-available/default
nginx -s reload

cp -r ./docker /opt/

htpasswd -b -c /var/www/.htpasswd admin $IP
rm -rf /var/www/html/*
cp -r ./html/* /var/www/html/

echo "IP: $IP" > /root/server-info.txt
echo "SITE: http://$IP/" >> /root/server-info.txt
echo "HTTP AUTH: admin / $IP" >> /root/server-info.txt
echo "PORTAINER: http://$IP:9002" >> /root/server-info.txt
echo "SOLR: http://$IP:8983" >> /root/server-info.txt
echo "ELASTICSEARCH: http://$IP:9200" >> /root/server-info.txt
echo "BITBUCKET: http://$IP:7990" >> /root/server-info.txt
echo "TEAMCITY: http://$IP:8111" >> /root/server-info.txt
echo "-----------------------------" >> /root/server-info.txt
echo "TIPS:" >> /root/server-info.txt
echo "MOUNT SSHFS: mkdir -p /mnt/remote/$IP && sshfs -o allow_other root@$IP:/ /mnt/remote/$IP" >> /root/server-info.txt
echo "XDEBUG TUNNEL: ssh -R 9000:127.0.0.1:9999 root@$IP" >> /root/server-info.txt

echo "-----------------------------"
cat /root/server-info.txt
echo "-----------------------------"
