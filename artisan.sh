ARGS="$@"
docker-compose exec web su - www-data -s /bin/bash -c "php artisan $ARGS"
