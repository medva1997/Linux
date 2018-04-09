sudo apt  update -y
sudo apt  dist-upgrade -y  
sudo apt install -y ssh ffmpeg vlc mc git gimp wget curl ssh nmap cups-pdf 
sudo apt install -y imagemagick build-essential checkinstall lm-sensors make
sudo apt-get install -y laptop-mode-tools gparted tree python-pip python3-pip


#install
sudo add-apt-repository ppa:webupd8team/java
sudo add-apt-repository ppa:attente/java-non-latin-shortcuts
sudo add-apt-repository ppa:nm-l2tp/network-manager-l2tp
sudo apt update -y 
sudo apt dist-upgrade -y
restart unity-settings-daemon
sudo apt install -y java-common oracle-java8-installer network-manager-l2tp network-manager-l2tp-gnome libreswan


#install Chrome
wget -q -O - https://dl-ssl.google.com/linux/linux_signing_key.pub | sudo apt-key add -
sudo sh -c 'echo "deb [arch=amd64] http://dl.google.com/linux/chrome/deb/ stable main" >> /etc/apt/sources.list.d/google-chrome.list'
sudo apt update -y
sudo apt install -y google-chrome-stable

#install Yandex
wget -q -O - https://repo.yandex.ru/yandex-browser/YANDEX-BROWSER-KEY.GPG | sudo apt-key add -
sudo sh -c 'echo "deb [arch=amd64] http://repo.yandex.ru/yandex-browser/deb beta main" > /etc/apt/sources.list.d/yandex-browser-beta.list'
sudo apt update -y
sudo apt install -y yandex-browser-beta pepperflashplugin-nonfree


#fix for hide "System program problem detected" messages 
gsettings set com.ubuntu.update-notifier show-apport-crashes false

sudo apt autoremove -y


curl https://packages.microsoft.com/keys/microsoft.asc | gpg --dearmor > microsoft.gpg
sudo mv microsoft.gpg /etc/apt/trusted.gpg.d/microsoft.gpg
sudo sh -c 'echo "deb [arch=amd64] https://packages.microsoft.com/repos/microsoft-ubuntu-xenial-prod xenial main" > /etc/apt/sources.list.d/dotnetdev.list'
sudo apt-get update -y
sudo apt-get install  -y dotnet-sdk-2.1.4



