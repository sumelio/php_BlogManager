# BlogManager en Php
Este proyecto permite gestionar los POST de una BLog y usa PDO, Composer, Front controller y bootstrap

## Descripción
Este proyecto tiene como objetivo usar buenas practicas con de acuerdo a php-fig.org
[http://www.php-fig.org/](http://www.php-fig.org/)

El proyecto utiliza los siguientes componentes:

1. Front controller
2. Router (phproute  [https://packagist.org/packages/phroute/phroute](https://packagist.org/packages/phroute/phroute))
3. Apache redirect


### 2. Front Controller

```php 
<?php

    ini_set('display_erros',1);
    ini_set('display_startup_errors',1);
    error_reporting(E_ALL);

	include_once  '../config.php';
?>
```

### 2. Phproute

```bash 
php composer.phar require phroute/phroute

```

```bash 
Using version ^2.1 for phroute/phroute
./composer.json has been updated
Loading composer repositories with package information
Updating dependencies (including require-dev)
Package operations: 1 install, 0 updates, 0 removals
  - Installing phroute/phroute (v2.1.0): Downloading (100%)         
Writing lock file
Generating autoload files

```


cmponser.json


```json


{

	"autoload": {},
	"require" : {
		"phroute/phroute": "^2.1"
	}
}


```

Configuración para habilitar archivo .htaccess en apache
https://www.digitalocean.com/community/tutorials/how-to-rewrite-urls-with-mod_rewrite-for-apache-on-ubuntu-16-04

Editar archivo 
```bash
sudo nano /etc/apache2/apache2.conf 
```

Reiniciar apache:

```bash
sudo /etc/init.d/apache2 restart
```



Actualizar composer

```bash

php composer.phar dump-autoload
ó
php composer.phar dump-autoload -o (este fue el que me funcionó)
```

Template Twing con composer

https://twig.symfony.com/




```bash
var/www/html/projects/blogMyPhp$ php composer.phar require "twig/twig:^2.0"
./composer.json has been updated
Loading composer repositories with package information
Updating dependencies (including require-dev)
Package operations: 2 installs, 0 updates, 0 removals
  - Installing symfony/polyfill-mbstring (v1.6.0): Downloading (100%)         
  - Installing twig/twig (v2.4.4): Downloading (100%)         
Writing lock file
Generating autoload files

```


Modelos con Eloquent

https://packagist.org/packages/illuminate/database

```php
use Illuminate\Database\Capsule\Manager as Capsule;

$capsule = new Capsule;

$capsule->addConnection([
    'driver'    => 'mysql',
    'host'      => 'localhost',
    'database'  => 'database',
    'username'  => 'root',
    'password'  => 'password',
    'charset'   => 'utf8',
    'collation' => 'utf8_unicode_ci',
    'prefix'    => '',
]);
```

```bash
$ php composer.phar require "twig/twig:^2.0"
./composer.json has been updated
Loading composer repositories with package information
Updating dependencies (including require-dev)
Package operations: 2 installs, 0 updates, 0 removals
  - Installing symfony/polyfill-mbstring (v1.6.0): Downloading (100%)         
  - Installing twig/twig (v2.4.4): Downloading (100%)         
Writing lock file
Generating autoload files
m@m-XPS-L412Z:/var/www/html/projects/blogMyPhp$ php composer.phar dump-autoload -o
Generating optimized autoload files
m@m-XPS-L412Z:/var/www/html/projects/blogMyPhp$ php composer require illuminate/database
Could not open input file: composer
m@m-XPS-L412Z:/var/www/html/projects/blogMyPhp$ php composer.phar require illuminate/database
Using version ^5.5 for illuminate/database
./composer.json has been updated
Loading composer repositories with package information
Updating dependencies (including require-dev)
Package operations: 9 installs, 0 updates, 0 removals
  - Installing symfony/translation (v3.3.10): Downloading (100%)         
  - Installing nesbot/carbon (1.22.1): Downloading (100%)         
  - Installing psr/simple-cache (1.0.0): Downloading (100%)         
  - Installing psr/container (1.0.0): Downloading (100%)         
  - Installing illuminate/contracts (v5.5.17): Downloading (100%)         
  - Installing doctrine/inflector (v1.2.0): Downloading (100%)         
  - Installing illuminate/support (v5.5.17): Downloading (100%)         
  - Installing illuminate/container (v5.5.17): Downloading (100%)         
  - Installing illuminate/database (v5.5.17): Downloading (100%)         
symfony/translation suggests installing symfony/config ()
symfony/translation suggests installing symfony/yaml ()
symfony/translation suggests installing psr/log (To use logging capability in translator)
illuminate/support suggests installing illuminate/filesystem (Required to use the composer class (5.2.*).)
illuminate/support suggests installing symfony/process (Required to use the composer class (~3.3).)
illuminate/support suggests installing symfony/var-dumper (Required to use the dd function (~3.3).)
illuminate/database suggests installing doctrine/dbal (Required to rename columns and drop SQLite columns (~2.5).)
illuminate/database suggests installing fzaninotto/faker (Required to use the eloquent factory builder (~1.4).)
illuminate/database suggests installing illuminate/console (Required to use the database commands (5.5.*).)
illuminate/database suggests installing illuminate/events (Required to use the observers with Eloquent (5.5.*).)
illuminate/database suggests installing illuminate/filesystem (Required to use the migrations (5.5.*).)
illuminate/database suggests installing illuminate/pagination (Required to paginate the result set (5.5.*).)
Writing lock file
Generating autoload files
```

