# -*- mode: ruby -*-
# vi: set ft=ruby :

Vagrant.configure("2") do |config|

  # Box Settings
  config.vm.box = "ubuntu/trusty64"

  # Provider Settings
  config.vm.provider "virtualbox" do |vb|
    vb.memory = 2048
    vb.cpus = 2
  end

  # Network Settings
  # config.vm.network "forwarded_port", guest: 80, host: 8080, host_ip: "127.0.0.1"
  config.vm.network "private_network", ip: "192.168.33.10"
  # config.vm.network "public_network"

  # Folder Settings
  config.vm.synced_folder "./demopages/", "/var/www/html", fsnotify: true

  # Provision Settings
  config.vm.provision "shell", inline: <<-SHELL
    apt-get update
    apt-get upgrade
    apt-get install -y git
    apt-get install -y apache2
    a2enmod rewrite
    add-apt-repository ppa:ondrej/php
    apt-get update
    apt-get install -y php7.3
    apt-get -y libapache2-mod-php7.3
    service apache2 restart
    apt-get install -y php7.3-common
    apt-get install -y php7.3-mcrypt
    apt-get install -y php7.3-zip
    sudo service apache2 restart
  SHELL
end
