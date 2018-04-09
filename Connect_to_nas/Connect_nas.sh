sudo apt update -y
sudo apt dist-upgrade -y
sudo apt autoremove -y
sudo apt install -y ntpdate
sudo ntpdate -q NAS.NAS
sudo ntpdate NAS.NAS
sudo apt install -y samba krb5-config krb5-user winbind libpam-winbind libnss-winbind smbclient
kinit Administrator@NAS.NAS
klist

sudo cp smb.conf /etc/samba/smb.conf 
sudo cp nsswitch.conf /etc/nsswitch.conf  
sudo cp common-password /etc/pam.d/common-password
sudo cp common-account /etc/pam.d/common-account

sudo systemctl restart smbd nmbd winbind
sudo systemctl stop samba-ad-dc
sudo systemctl enable smbd nmbd winbind

sudo net ads join -U Administrator@NAS.NAS

sudo pam-auth-update

sudo systemctl restart smbd nmbd winbind
sudo systemctl stop samba-ad-dc
sudo systemctl enable smbd nmbd winbind

wbinfo -u
sudo visudo

sudo cp common-session /etc/pam.d/common-session
sudo cp 50-ubuntu.conf /usr/share/lightdm/lightdm.conf.d/50-ubuntu.conf
sudo cp limits.conf /etc/security/limits.conf

