install:
	docker-compose -f docker/docker-compose.yml run --rm composer install

up:
	docker-compose -f docker/docker-compose.yml up -d

down:
	docker-compose -f docker/docker-compose.yml down

dump:
	docker-compose -f docker/docker-compose.yml run --rm composer -- dump

php:
	docker-compose -f docker/docker-compose.yml run --rm php bash

tests:
	docker-compose -f docker/docker-compose.yml run --rm phpunit tests

robot:
	docker-compose -f docker/docker-compose.yml run --rm php php bin/console