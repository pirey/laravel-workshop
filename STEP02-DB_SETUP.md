## create database
- open `phpmyadmin` or `mysql` cli
- create new database

## connect laravel to database

- open `.env`
- edit config

```
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=database_name
DB_USERNAME=database_username
DB_PASSWORD=database_password
```

## database design preview

```
- passwords
- users
    - (provided by laravel)

- blogs
    - id
    - title
    - content 
```

## create Blog model


`php artisan make:model Blog -m`

- this will create Blog model alongside migration

## edit migration for blog

```
Schema::create('blogs', function (Blueprint $table) {
    $table->increments('id');
    $table->timestamps();

    $table->string('title'); // <---
    $table-text('content');  // <---
});
```

## run the migration

`php artisan migrate:fresh`
