# Proj_Slim

## WIP

## What is this ?
This is a Slim/Twig template to use in light project with a mecanic of blocks.

## Features

* gestion of page with blocks and expend
* Use of a database

## Usage in local

You will first need to import your composers :
```
composer install
```

Then
```php
//Install DB
Import in PhpMyAdmin the database slim_try.sql

// Connect your database in app/settings.php 
$settings['db'] = [];
$settings['db']['host'] = 'localhost';
$settings['db']['port'] = '';
$settings['db']['user'] = 'root';
$settings['db']['pass'] = '';
$settings['db']['name'] = 'slim_try';
```

## Contributing
* Brunet Florian
* Bruno Simon

### With the help
* Jules Gesnon
