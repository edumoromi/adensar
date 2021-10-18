Vagrant.configure("2") do |config|

  config.vm.box = "hashicorp/bionic64"

  config.vm.define :dbserver do |db|
    db.vm.hostname = "db"
    db.vm.network "public_network", ip: "192.168.1.22", bridge: "Hyper-V Virtual Ethernet Adapter"

    db.vm.provision "shell",
            inline: "cat /vagrant/configs/id_bionic.pub >> .ssh/authorized_keys"
	

  end

  config.vm.define :webserver do |web|
    web.vm.hostname = "web"
    web.vm.network "forwarded_port", guest: 80, host: 8081
    web.vm.network "public_network", ip: "192.168.1.24", bridge: "Hyper-V Virtual Ethernet Adapter"

    web.vm.provision "shell",
            inline: "cat /vagrant/configs/id_bionic.pub >> .ssh/authorized_keys"
			

	
	
  end

  config.vm.define :ansible do |ansible|
      ansible.vm.hostname = "ansible"
      ansible.vm.network "public_network", ip: "192.168.1.20", bridge: "Hyper-V Virtual Ethernet Adapter"
      ansible.vm.provision "shell",
                  inline: "apt-get update && \
                           apt-get install -y software-properties-common && \
                           apt-add-repository --yes --update ppa:ansible/ansible && \
                           apt-get install -y ansible"

      ansible.vm.provision "shell",
                  inline: "cp /vagrant/configs/id_bionic /home/vagrant && \
                           chmod 600 /home/vagrant/id_bionic && \
                           chown vagrant:vagrant /home/vagrant/id_bionic"
      ansible.vm.provision "shell",
                  inline: "ansible-playbook -i /vagrant/configs/ansible/hosts \
                           /vagrant/configs/ansible/playbook.yml"

  end

end
