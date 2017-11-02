<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require_once '../vendor/autoload.php';

//Clases de phproute
include_once  '../config.php';

$baseUrl = '';

// http://localhost/projects/blogMyPhp/public/
//$baseDir = $_SERVER['SCRIPT_NAME'];
$baseDir = str_replace(basename($_SERVER['SCRIPT_NAME']),'',$_SERVER['SCRIPT_NAME']);
$baseUrl = 'http://' . $_SERVER['HTTP_HOST'].$baseDir;

define('BASE_URL', $baseUrl);


function render($fileName, $params = [] ){
  // Ommtir cualquier salida
  ob_start();
  //toma arreglo asociativo, indices son cadenas la vuelve cadenas
  extract($params);
  include $fileName;
  return ob_get_clean();


}
$route = $_GET['route'] ?? '/';

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
/*
$response = $dispatcher->dispatch($_SERVER['REQUEST_METHOD'], $router));


// Print out the value returned from the dispatched function




*/

/*$router->post($route, $handler);   # match only post requests
$router->delete($route, $handler); # match only delete requests
$router->any($route, $handler);    # match any request method
*/
/*    $route = $_GET['route'] ?? '/';*/

/*switch($route){
   case '/': require '../index.php'; break;
   case '/admin': require '../admin/index.php'; break;
   case '/admin/posts': require '../admin/posts.php'; break;

}
*/


