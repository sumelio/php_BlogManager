<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require_once '../vendor/autoload.php';

 

$baseUrl = '';

// http://localhost/projects/blogMyPhp/public/
//$baseDir = $_SERVER['SCRIPT_NAME'];
$baseDir = str_replace(basename($_SERVER['SCRIPT_NAME']),'',$_SERVER['SCRIPT_NAME']);
$baseUrl = 'http://' . $_SERVER['HTTP_HOST'].$baseDir;

define('BASE_URL', $baseUrl);

 
$route = $_GET['route'] ?? '/';


use Illuminate\Database\Capsule\Manager as Capsule;

$capsule = new Capsule;

$dbHost ="localhost";
$dbName ="blogDataBase";
$dbuser ="userBLog";
$dbpass ="userBLog-2017";


$capsule->addConnection([
    'driver'    => 'mysql',
    'host'      => 'localhost',
    'database'  => 'blogDataBase',
    'username'  => 'userBLog',
    'password'  => 'userBLog-2017',
    'charset'   => 'utf8',
    'collation' => 'utf8_unicode_ci',
    'prefix'    => '',
]);

$capsule->setAsGlobal();

$capsule->bootEloquent();



use Phroute\Phroute\RouteCollector;


$router = new RouteCollector();

//============================ Admin ====================
$router->controller('/', App\Controller\IndexController::class); 

$router->controller('/admin',        App\Controller\Admin\IndexController::class);


//============================ POST ====================
$router->controller('/admin/posts',         App\Controller\Admin\PostController::class);

#$router->get('/admin/posts/create',  App\Controller\Admin\PostController::class);

#$router->post('/admin/posts/create', App\Controller\Admin\PostController::class);



//$router->get($route, $handler);    # match only get requests
 # match only get requests


//Toma la ruta y llama al metodo que realmente necesita
$dispatcher = new Phroute\Phroute\Dispatcher($router->getData());

$response = $dispatcher->dispatch(trim($_SERVER[trim('REQUEST_METHOD')]), trim($route));


echo $response;




