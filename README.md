Dev.io project
=======

#A Symfony project with behat and Selenium running on Vagrant machine. Feel free to coding here!

##Installation:
* add 192.168.19.20   dev.io  www.dev.io in your local host file
* vagrant up
* vagrant ssh
* add 192.168.19.1    selenium.dev in your vagrant /etc/hosts file
* cd /var/www/devio
* composer install (if you haven't done before)

##Running tests:

* Run in your local machine java -jar ./bin/selenium-server-standalone-2.45.0.jar
* vagrant ssh
* cd /var/www/devio
* ./bin/behat --config="app/config/behat.yml"
