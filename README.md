Dev.io project
=======

#A Symfony project with behat and Selenium running on Vagrant machine. Feel free to coding here!

##Installation:
1 add 192.168.19.20   dev.io  www.dev.io in your local host file
2 vagrant up
3 vagrant ssh
4 add 192.168.19.1    selenium.dev in your vagrant /etc/hosts file
5 cd /var/www/devio
6 composer install (if you haven't done before)

##Running tests:

1 Run in your local machine java -jar ./bin/selenium-server-standalone-2.45.0.jar
2 vagrant ssh
3 cd /var/www/devio
4 ./bin/behat --config="app/config/behat.yml"
