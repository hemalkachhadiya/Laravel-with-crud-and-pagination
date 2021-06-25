# Laravel Pagination 

Laravel default pagination example with customize

## Demo setup setps

### Clone
```base
git clone git@github.com:hemalkachhadiya/Laravel-with-crud-and-pagination.git
```

### System Requirements
```base
php version - "^7.3|^8.0"
```

### Install composer
Go to the project directory and install composer
```base
composer install
```

### setup .env file
```php
copy .env.example and paste in project and rename to .env

APP_URL=
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=demo_laravel_pagination
DB_USERNAME=root
DB_PASSWORD=

after env setup run cammand

php artisan key:generate
php artisan optimize:clear
php artisan migrate
```

### Install npm for tailwind css
```base
npm install
npm run dev
```