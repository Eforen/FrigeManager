ARGS="$@"
#docker-compose run  --u www-data --entrypoint composer composer "$ARGS"
docker-compose exec web su - www-data -s /bin/bash -c "composer $ARGS"
