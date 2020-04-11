ARGS="$@"
docker-compose run --u www-data --entrypoint npm npm "$ARGS"
