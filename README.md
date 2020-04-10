# Run Applicaton

- git clone https://github.com/vladtf/laravel-demo.git
- composer install ( make sure that you enabled `extension=fileinfo` and `extension=pdo_mysql` in yout php.ini configuration )
- npm install
= cp .env.example .env ( to copy env file )
- php artisan key:generate
- php artisan migrate ( be sure that you have created a database corresponding to .env )
