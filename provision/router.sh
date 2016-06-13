#!/bin/sh

ORIGEN='/var/cache/apt/archives/restore/'


test -d /var/lib/apt/lists && rm -R /var/lib/apt/lists
ln -s /var/cache/apt/archives/lists/ /var/lib/apt/lists

export DEBIAN_FRONTEND=noninteractive
apt-get update
apt-get -y install vim bind9 dnsutils


if ! grep -q "GatewayPorts yes" /etc/ssh/ssh_config 
    then echo "GatewayPorts yes" >> /etc/ssh/ssh_config
fi


echo 1 > /proc/sys/net/ipv4/ip_forward
iptables -t nat -F
iptables -t filter -F
iptables -t nat -A POSTROUTING -o eth0 -j MASQUERADE
iptables -t nat -A POSTROUTING -o eth1 -j MASQUERADE
iptables -A FORWARD -i eth0 -o eth1 -j ACCEPT
iptables -A FORWARD -i eth1 -o eth0 -j ACCEPT
iptables -t nat -A PREROUTING -p tcp -i eth0 --dport 8080 -j DNAT --to-destination 10.0.0.210:80
iptables -t nat -A PREROUTING -p tcp -i eth0 --dport 8443 -j DNAT --to-destination 10.0.0.210:443


echo "nameserver 127.0.0.1" > /etc/resolv.conf
cp $ORIGEN/named.conf.options.router /etc/bind/named.conf.options
systemctl restart bind9


cp $ORIGEN/openssl.cnf.router /etc/ssl/openssl.cnf

cp $ORIGEN/miCA-example.com.txt /root/CA-ssl.txt



