#!/bin/sh
ORIGEN='/vagrant/provision/'

export DEBIAN_FRONTEND=noninteractive
apt-get update
apt-get -y install vim 


useradd respaldo -d /home/respaldo -m

useradd operador -d /home/operador -m
echo operador:password | chpasswd





ssh-keygen -t rsa -N "" -f /root/.ssh/

cat /vagrant/provision/id_rsa.pub >> /root/.ssh/authorized_keys

cat > /etc/hosts <<E0F
127.0.0.1    localhost
10.0.0.210   server
10.0.0.211   datos
10.0.0.212   control
EOF




