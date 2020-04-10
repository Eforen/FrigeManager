docker-compose up -d --build

docker-compose exec web cp -n /var/www/.env.example /var/www/.env

docker-compose exec web bash /var/www/fixPerms.sh

docker-compose run composer composer install

docker-compose exec web php artisan key:generate
docker-compose exec web php artisan config:cache
