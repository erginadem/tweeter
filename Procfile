web: vendor/bin/heroku-php-apache2 public/
worker: php artisan queue:work --tries=3
release: php artisan migrate:fresh
