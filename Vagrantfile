# -*- mode: ruby -*-
# vi: set ft=ruby :

Vagrant.configure("2") do |config|

  # Default
  config.vm.box = "precise64_vmware"
  config.vm.box_url = "http://files.vagrantup.com/precise64_vmware.box"
  config.vm.network :public_network

  # VirtualBox
  config.vm.provider :virtualbox do |v, override|
    override.vm.box = "precise32"
    override.vm.box_url = "http://files.vagrantup.com/precise32.box"
  end

  # Enable the bootstrap-script
  config.vm.provision :shell, :path => "bootstrap/bootstrap.sh"

end