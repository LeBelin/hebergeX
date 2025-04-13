#!/bin/bash

useradd -md /home/$1 $1
echo $1:$2 | chpasswd

mkdir -p /home/$1/public_html
echo $1 > /home/$1/public_html/index.html

cp /etc/apache2/sites-available/XXXX.conf /etc/apache2/sites-available/$1.conf
sed -i -e s/XXXX/$1/g /etc/apache2/sites-available/$1.conf
a2ensite $1.conf
service apache2 reload

echo "$1 IN CNAME SrvWeb" >>  /etc/bind/db.heberge4.lan
service bind9 reload

echo "L'utilisateur $1 a été créé avec succès, Apache et Bind9 ont été rechargés."
