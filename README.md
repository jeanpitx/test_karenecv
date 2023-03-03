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
- Configure .env with your database connection.
- Migrate database and seed with:
````
php artisan migrate --seed
````
- Optimize project with:
````
php artisan key:generate
php artisan config:clear
php artisan route:clear
````
- Start project
````
php artisan serve
````

The credentials for access to panel is:
user: test@admin.com
pass: admin123

Author: Jean Pierre Meza Cevallos