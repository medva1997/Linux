#!/bin/bash
#Yandex
wget -q -O - https://repo.yandex.ru/yandex-browser/YANDEX-BROWSER-KEY.GPG | sudo apt-key add -
sudo sh -c 'echo "deb [arch=amd64] http://repo.yandex.ru/yandex-browser/deb beta main" > /etc/apt/sources.list.d/yandex-browser-beta.list'


sudo apt -y update
sudo apt -y dist-upgrade 
sudo apt -y install ssh ffmpeg vlc mc chromium-browser git gimp wget curl ssh nmap printer-driver-cups-pdf imagemagick build-essential checkinstall lm-sensors make laptop-mode-tools gparted tmux vim nano yandex-browser-beta network-manager-l2tp openvpn easy-rsa apt-transport-https

wget -q https://packages.microsoft.com/config/ubuntu/18.04/packages-microsoft-prod.deb
sudo dpkg -i packages-microsoft-prod.deb
rm -f packages-microsoft-prod.deb
sudo apt -y install apt-transport-https
sudo apt -y update
sudo apt -y install dotnet-sdk-2.1

wget https://raw.githubusercontent.com/medva1997/Linux/master/jetbrains.sh -O jetbrains.sh
bash jetbrains.sh
