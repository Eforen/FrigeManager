docker-compose up -d --build

docker-compose exec web su - www-data -s /bin/bash -c "cp -n /var/www/.env.example /var/www/.env"

docker-compose exec web bash /var/www/fixPerms.sh

. ./composer.sh install

. ./artisan.sh key:generate
. ./artisan.sh config:cache
