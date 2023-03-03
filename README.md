## About test

Requeriments:
- Php >8.0
- Composer

Instructions:

- Clone git project with: 
````
git clone https://github.com/jeanpitx/test_karenecv.git
````
- move to resource with: 
````
cd test_karenecv
````
- Update package with:
````
composer install
````
- Migrate database and seed with:
````
php artisan migrate --seed
````
- Optimize project with:
````
php artisan optimize
````
- Start project
````
php artisan serve
````
Author: Jean Pierre Meza Cevallos