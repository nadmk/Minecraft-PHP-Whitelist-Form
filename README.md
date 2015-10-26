# Minecraft-PHP-Whitelist-Form (MPWF)

A php script that allows you to take Whitelist requests for your minecraft server via E-Mail.

# Setup

Linux: 

`Prepare OS:
sudo apt-get update
sudo apt-get upgrade
sudo apt-get install apache2 php5 

Installation: 
git clone git://github.com/NickTehPro/Minecraft-PHP-Whitelist-Request.git MPWR //Clone the repository 
cp /MPWR/ /var/www/ //Copy the files 
nano send_mail.php //Change the E-Mail and your website.

Apache Setup:

cd ~
cd /etc/apache2/sites-enabled/
nano 000* //Change the location from /var/www/html/ to /var/www/MPWR/
service apache2 reload

DONE!`
