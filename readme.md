### Intro
Create a docker container for PHP demos ONLY

### Installation
`docker-compose up --build -d`

### DB
```
docker-compose exec db /bin/sh
mysql -u root -p secret
```

### PHP
```
docker-compose exec php composer install
docker-compose exec php composer ./vendor/bin/phpunit tests
```