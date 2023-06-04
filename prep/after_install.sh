find /var/www/html -type d -exec chmod 2755 '{}' \;
find /var/www/html -type f -exec chmod 2644 '{}' \;
chown -R apache:apache /var/www/html;
systemctl restart httpd;
