# -*- mode: ruby -*-
# vi: set ft=ruby :

provision = <<-EOT
    rpm -ivh http://ftp.tsukuba.wide.ad.jp/Linux/fedora/epel/7/x86_64/e/epel-release-7-5.noarch.rpm
    yum -y install ansible libselinux-python
    ansible-playbook /vagrant/provision/vagrant.yml --connection=local -vvv
EOT

Vagrant.configure(2) do |config|
  config.vm.box = "chef/centos-7.0"

  config.vm.provider :virtualbox do |provider, override|
    provider.customize ["modifyvm", :id, "--memory", "1024"]
  end

  config.vm.hostname = "php7.dev"
  config.vm.network :private_network, ip: "192.168.33.113"

  config.vm.provision :shell, :inline => provision
  config.vm.synced_folder ".", "/vagrant", :mount_options => ["dmode=777", "fmode=644"]
end
