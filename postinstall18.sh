#!/bin/bash
#Yandex
wget -q -O - https://repo.yandex.ru/yandex-browser/YANDEX-BROWSER-KEY.GPG | sudo apt-key add -
sudo sh -c 'echo "deb [arch=amd64] http://repo.yandex.ru/yandex-browser/deb beta main" > /etc/apt/sources.list.d/yandex-browser-beta.list'


sudo apt -y update
sudo apt -y dist-upgrade 
sudo apt -y install ssh ffmpeg vlc mc chromium-browser gnome-tweak-tool git gimp wget curl ssh nmap printer-driver-cups-pdf imagemagick libcanberra-gtk-module build-essential checkinstall lm-sensors make laptop-mode-tools gparted tmux vim nano yandex-browser-beta network-manager-l2tp openvpn easy-rsa apt-transport-https

wget -q https://packages.microsoft.com/config/ubuntu/18.04/packages-microsoft-prod.deb
sudo dpkg -i packages-microsoft-prod.deb
rm -f packages-microsoft-prod.deb
sudo apt -y install apt-transport-https
sudo apt -y update
sudo apt -y install dotnet-sdk-2.1

wget https://raw.githubusercontent.com/medva1997/Linux/master/jetbrains.sh -O jetbrains.sh
bash jetbrains.sh



sudo snap install vscode --classic
sudo snap install sublime-text --classic

sudo snap install pycharm-community --classic
sudo snap install datagrip --classic
sudo snap install clion --classic

sudo snap install obs-studio telegram-desktop keepassxc



cat <<EOF >> ~/.bashrc

alias sshsee='ssh alexey@109.120.138.81'
alias sshusa='ssh alexey@207.244.96.195'
alias sshmail=''
alias sshpi='ssh pi@192.168.1.17'
alias sshserver0='ssh alexey@192.168.1.23'
alias sshserver1='ssh alexey@192.168.1.12'

alias sshmik1='ssh admin@192.168.1.1'
alias sshmik2='ssh admin@192.168.1.202'
alias sshmik3='ssh admin@192.168.1.203'
alias sshmik4='ssh admin@192.168.1.204'
alias sshmik5='ssh admin@192.168.1.205'
alias sshmik6='ssh admin@192.168.1.206'
alias sshmik7='ssh admin@192.168.1.207'
alias sshmik8='ssh admin@192.168.1.208'

alias push='git push'
alias pull='git pull'
alias clone='git clone'
alias commit='git commit -m'
alias tmu='tmux attach || tmux new'

ssh() {
    if [ "$(ps -p $(ps -p $$ -o ppid=) -o comm=)" = "tmux" ]; then
            tmux rename-window "\$*"
            command ssh "\$@"
            tmux set-window-option automatic-rename "on" 1>/dev/null
    else
            command ssh "\$@"
    fi
}

EOF
