# -*- mode: ruby -*-
# vi: set ft=ruby :

Vagrant.configure("2") do |config|
    config.vm.box = "CentOS6.4_php5.3"
    config.vm.box_url = "http://beauvo-dev.s3-website-ap-northeast-1.amazonaws.com/box/CentOS6.4_php5.3.box"

    config.vm.network :forwarded_port, guest: 80, host: 5000
    config.vm.synced_folder ".", "/var/www/html"

    config.vm.provider :virtualbox do |vb|
        vb.customize ["modifyvm", :id, "--memory", "1024"]
        vb.customize ["modifyvm", :id, "--cpus", "2"]
    end

end
