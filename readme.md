# Proj_Slim



## What is this ?

This is a Slim/Twig template to use for Portfolio with a mecanic of blocks.


## Features

* Gestion of page with blocks and expend
* Use of a database for the project


## Install in local

You will first need to import your composers :
```
composer install
```

If it doesnt work :
https://getcomposer.org/Composer-Setup.exe
and retry.

Then
```php
//Install DB
In PhpMyAdmin create the db portfolio_slim
Import the database project.sql

// Connect your database in app/settings.php 
$settings['db'] = [];
$settings['db']['host'] = 'localhost';
$settings['db']['port'] = '';
$settings['db']['user'] = 'root';
$settings['db']['pass'] = '';
$settings['db']['name'] = 'portfolio_slim';
```


## How to introduce your project

Add a line in your database with a name1 (no caps), a title, a introduction (for the home page), a description (for the individual project page) and a category ('design' or 'dev'). You can add a linke but it's not mandatory. Next you will need 2 photos : 1 for the home (name of the photo : name1_vig.png) and 1 for the project page (name1_png).
You can add a category : 
```php
// ./app/routes.php
$app
    ->get(
        // add your category after design
        '/project/{cate:dev|design}/{proj:[a-z]+}',
        function($request, $response, $arguments)
        {        
            $viewData=[];
            $viewData['seo'] = new \StdClass();
            $viewData['seo']->title = 'Portfolio';
```


## What else?

You still have to do the front (glhf, i hate that part). Use files in views/pages/child and dont forget to call your blocks in the base.


## Contributing
* Brunet Florian
* Bruno Simon

### With the help
* Jules Guesnon


Donc forget to tag and to follow the github :ok_hand: