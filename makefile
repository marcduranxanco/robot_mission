install:
	docker-compose -f docker/docker-compose.yml run --rm composer install

up:
	docker-compose -f docker/docker-compose.yml up -d

down:
	docker-compose -f docker/docker-compose.yml down

dump:
	docker-compose -f docker/docker-compose.yml run --rm composer -- dump

dumpo:
	docker-compose -f docker/docker-compose.yml run --rm composer dump -o

php:
	docker-compose -f docker/docker-compose.yml run --rm php bash

run-tests:
	docker-compose -f docker/docker-compose.yml run --rm phpunit tests

robot:
	docker-compose -f docker/docker-compose.yml run --rm php php bin/console.php robot-mission