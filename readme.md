## Tested on Ubuntu 20.1

## Dependencies:
- Docker
- Docker-compose

## To check, follow these steps:
1) run ````docker-compose up -d --build```

2) go in container ```docker-compose exec php-test bash```

3) install phpunit ```cd /var/php-test && composer install```

4) check  tests ```cd /var/php-test && composer test tests```

5) check  custom run ```cd /var/php-test/app && php exec.php qwE``` -> expected stdout: ewQ