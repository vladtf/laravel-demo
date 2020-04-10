# App

This is a app to test laravel features.

App was made based on [Traversy Media](https://www.youtube.com/user/TechGuyWeb) tutorial.

An app create and save posts using laravel framework.


# Run Applicaton

- git clone https://github.com/vladtf/laravel-demo.git ( inside your `xampp/htdocs` folder )
- setup enviroment using :  [Environment Setup & Laravel Installationa](https://www.youtube.com/watch?v=H3uRXvwXz1o&list=PLillGF-RfqbYhQsN5WMXy6VsDMKGadrJ-&index=2)
- composer install ( make sure that you enabled `extension=fileinfo` and `extension=pdo_mysql` in your php.ini configuration file )
- npm install
- cp .env.example .env ( to copy env file )
- php artisan key:generate
- php artisan migrate ( be sure that you have created a database corresponding to .env `DB_DATABASE=your_db_name` )
- go to `localhost` ( whatever domain you set ) and test the app
