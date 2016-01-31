
$ git clone https://github.com/getherbie/website.git website  
$ cd website  
$ composer install  
$ composer dump-autoload  
$ find . | grep .git | xargs rm -rf  
$ cd ..  
$ chown -R "user" website  

comment out "config.plugins.path" in "site/config/main.yml"

finito ;-)
