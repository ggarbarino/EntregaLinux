#!/bin/bash
ORIGEN='/vagrant/provision/'
export DEBIAN_FRONTEND=noninteractive


apt-get update
apt-get -y install vim 


cp $ORIGEN/bashrc /etc/skel/.bashrc
cp $ORIGEN/bashrc /home/vagrant/.bashrc
cp $ORIGEN/bashrc-root /root/.bashrc
cp $ORIGEN/vimrc /etc/vim/vimrc









