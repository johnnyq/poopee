#!/bin/ash
echo Enabling Community Packages...
sed -i '/^#.* v3.7/community /s/^#//' /etc/apk/repositories
echo Checking For Updates...
apk update
echo Upgrading...
apk upgrade
echo Installing additional required packages...
apk add nano samba-server samba-common-tools shadow smartmontools php7 cryptsetup util-linux docker
echo Allowing Root Login through SSH...
sed -i 's/prohibit-password/yes/' /etc/ssh/sshd_config
echo Starting Samba...
service samba start
echo Starting Docker...
service docker start
echo Enabling Samba to satrt with the system...
rc-update add samba default
echo Enabling Docker to start with the system...
rc-update add docker default
cd /
echo Downloading the latest simpnas....
wget https://simpnas.pittpc.com/latest.tar
echo extracting simpnas to /www...
tar -xvf latest.tar
echo Removing the tar download...
rm latest.tar
mv /www/conf/smb.conf /etc/samba/smb.conf
rm -rf /www/conf
cd /www
echo Starting Simpnas Web Service...
php -S 0.0.0.0:80&
echo ALL SETUP!!! You can now access your system by going to http://$HOSTNAME
