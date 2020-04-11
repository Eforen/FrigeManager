ARGS="$@"
docker-compose exec web su - www-data -s /bin/bash -c "./fixPerms.sh"
