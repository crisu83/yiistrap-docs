#!/usr/bin/env bash

# download the package lists from the repositories
sudo apt-get update

# --- miscellaneous ----

sudo apt-get install -y python-software-properties
sudo apt-get install -y curl
sudo apt-get install -y git-core
sudo apt-get install -y screen
sudo apt-get install -y vim

# --- apache ---

# install packages
sudo apt-get install -y apache2

# remove default webroot
sudo rm -rf /var/www

# symlink project as webroot
sudo ln -fs /vagrant/web /var/www

# setup hosts
sudo cp /vagrant/bootstrap/sites /etc/apache2/sites-available/default
sudo cp /vagrant/bootstrap/hosts /etc/hosts
sudo cp /vagrant/bootstrap/hostname /etc/hostname

# enable apache modules
sudo a2enmod rewrite
sudo a2enmod setenvif
sudo a2enmod autoindex
sudo a2enmod deflate
sudo a2enmod filter
sudo a2enmod headers
sudo a2enmod expires

# --- php ---

# install packages
sudo apt-get install -y php5
sudo apt-get install -y php5-curl
sudo apt-get install -y php5-gd
sudo apt-get install -y php5-mcrypt
sudo apt-get install -y php-apc

# --- xdebug ---

sudo apt-get install -y php5-xdebug
sudo cp /vagrant/bootstrap/xdebug.ini /etc/php5/conf.d/
sed -i 's/html_errors = Off/html_errors = On/g' /etc/php5/apache2/php.ini

# --- node.js ---

# install node.js dependencies
sudo apt-get install -y python g++ make

# add node.js repository
add-apt-repository ppa:chris-lea/node.js
sudo apt-get update

# install packages
sudo apt-get install -y nodejs

# install grunt.js
npm install -g grunt-cli

# install local npm packages
cd /vagrant && npm install --no-bin-links

# --- pear ---

sudo apt-get install php-pear

# --- apigen ---

sudo pear config-set auto_discover 1
sudo pear install pear.apigen.org/apigen

# temporary fix for issue #253 - https://github.com/apigen/apigen/issues/253
sudo ln -s /usr/share/php/texy/src/texy.php /usr/share/php/Texy.php

# --- composer ---

cd /vagrant && curl -sS https://getcomposer.org/installer | php

# --- restart apache ---

sudo service apache2 restart