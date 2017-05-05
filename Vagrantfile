Vagrant.configure("2") do |config|
  config.vm.hostname = "base.laravel.morillasinteractive.local"

  config.vm.box = "morillas/laravel_base"
  config.hostmanager.enabled = true
  config.hostmanager.manage_host = true
  config.hostmanager.manage_guest = false
  config.hostmanager.ignore_private_ip = false
  config.hostmanager.include_offline = true
  config.vm.network "private_network", type: "dhcp"
  config.hostmanager.ip_resolver = proc do |vm, resolving_vm|
    if hostname = (vm.ssh_info && vm.ssh_info[:host])
      `vagrant ssh -c "hostname -I"`.split()[1]
    end
  end

  config.vm.provider :virtualbox do |vb|
     vb.customize ["modifyvm", :id, "--usbehci", "off"]
     vb.customize ["modifyvm", :id, "--usbxhci", "off"]
  end
  
  config.vm.provision "shell", inline: $script
end

$script = <<SCRIPT
echo "morillas interactive"
echo "===================="
echo "Vagrant provisioning..."
cd /vagrant/laravel
composer install
SCRIPT

