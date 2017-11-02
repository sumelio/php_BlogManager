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

