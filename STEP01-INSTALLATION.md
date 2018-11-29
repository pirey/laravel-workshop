## pre-requisites
- PHP >= 7.1.3
- OpenSSL PHP Extension
- PDO PHP Extension
- Mbstring PHP Extension
- Tokenizer PHP Extension
- XML PHP Extension
- Ctype PHP Extension
- JSON PHP Extension
- BCMath PHP Extension

## download composer
- goto https://getcomposer.org/download/
- install composer 

```
php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');"
php -r "if (hash_file('sha384', 'composer-setup.php') === '93b54496392c062774670ac18b134c3b3a95e5a5e5c8f1a9f115f203b75bf9a129d5daa8ba6a13e2cc8a1da0806388a8') { echo 'Installer verified'; } else { echo 'Installer corrupt'; unlink('composer-setup.php'); } echo PHP_EOL;"
php composer-setup.php
php -r "unlink('composer-setup.php');"
```

## install laravel using composer

`composer global require laravel/installer`

## create new laravel project

- navigate to any folder using terminal
- run command to create / generate new laravel project

`laravel new blog`

## basic config
- navigate to project folder
- generate key

`php artisan generate:key`

- set permission for storage folder

`sudo chmod -R 777 storage`

- copy `.env.example` to `.env`

## run the app

`php artisan serve`

- view in the browser

`http://localhost:8000`
