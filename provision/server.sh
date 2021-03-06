#!/bin/bash
ORIGEN='/vagrant/provision/'
export DEBIAN_FRONTEND=noninteractive


apt-get update
apt-get -y install vim apache2 php5 php5-mysql php5-gd dnsutils

useradd operador -d /home/operador -m
echo operador:password | chpasswd

cat > /etc/hosts <<E0F
127.0.0.1    localhost
10.0.0.210   server
10.0.0.211   datos
10.0.0.212   control
EOF
