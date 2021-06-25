# Laravel Pagination
Laravel default pagination example with customize
## Demo setup steps
### Versions
```base
php version - "^7.3|^8.0"
laravel version - "^8.40"
```
### Clone
```base
git clone git@github.com:hemalkachhadiya/Laravel-with-crud-and-pagination.git
```
### Install composer
Go to the project directory   
install composer using cmd
```composer
composer install
```
### setup .env file
copy ```.env.example``` and paste in project and rename to ```.env```   
first create database and setup credentials in ```.env``` file
```php
APP_URL=
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=demo_laravel_pagination
DB_USERNAME=root
DB_PASSWORD=
```
after env setup run below commands for database
```base
php artisan key:generate
php artisan optimize:clear
php artisan migrate
php artisan db:seed
```
### Install npm for tailwind css
If you can't see css then run below commands
```base
npm install
npm run dev
```