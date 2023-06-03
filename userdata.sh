#!/usr/bin/bash

# update system
dnf update -y;

# install mysql, php (+ exts), wget, unzip, python, pip, ruby
dnf install -y httpd mariadb105 php php-mysqli php-gd php-json php-mbstring mod_ssl wget unzip python pip ruby;

# install composer
php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');";
php composer-setup.php;
php -r "unlink('composer-setup.php');";
mv composer.phar /usr/local/bin/composer

# install php-zip extension (through pecl)
dnf install -y php-devel php-pear libzip libzip-devel;
pecl install zip;
echo "extension=zip.so" | tee /etc/php.d/20-zip.ini

# start apache
systemctl enable httpd;
systemctl start httpd --now;

# Configure Let's Encrypt (certbot)...
dnf install -y augeas;
pip install certbot python-augeas certbot certbot-apache;
certbot --noninteractive --agree-tos -m ygsmr.public@gmail.com --apache --domain mantouenjoyer.live;
# ...and add a cron job
crontab -l > tmp;
echo "37 0,12 * * * root /usr/local/bin/certbot renew --quiet" >> tmp;
crontab tmp;
rm tmp;

# Setup & start CodeDeploy (to pull web code)
cd /tmp;
wget https://aws-codedeploy-ap-southeast-1.s3.ap-southeast-1.amazonaws.com/latest/install;
chmod +x ./install;
./install auto;
cd /;
systemctl enable codedeploy-agent;
systemctl start codedeploy-agent --now;
