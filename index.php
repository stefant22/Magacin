<?php
require_once 'vendor/autoload.php';
require_once 'Configuration.php';
use App\Controllers\MainController;
use App\Core\DatabaseConfiguration;
use App\Core\DatabaseConnection;
use App\Core\Router;

ob_start();

$databaseConfiguration = new DatabaseConfiguration(
    Configuration::DATABASE_HOST,
    Configuration::DATABASE_USER,
    Configuration::DATABASE_PASS,
    Configuration::DATABASE_NAME);
$databaseConnection = new DatabaseConnection($databaseConfiguration);
$url = strval(filter_input(INPUT_GET, 'URL'));
$httpMethod = filter_input(INPUT_SERVER, 'REQUEST_METHOD');
$router = new Router();
$routes = require_once 'Routes.php';
foreach ($routes as $route) {
    $router->add($route);
}
$route = $router->find($httpMethod, $url);
$arguments= $route->extractArguments($url);

$fullControllerName='\\App\\Controllers\\'. $route->getControllerName().'Controller';
$controller = new $fullControllerName($databaseConnection);
call_user_func_array([$controller,$route->getMethodName()],$arguments);

$data = $controller->getData();

if($controller instanceof \App\Core\ApiController){
    ob_clean();
    header('Content-type: application/json; charset=utf-8 ');

    echo json_encode($data);
    exit;
}
#foreach ($data as $name => $value) {
 #   $$name = $value;

#}

#require_once 'views/'.$route->getControllerName().'/'.$route->getMethodName().'.html';
$data['BASE'] = Configuration::BASE;
#require_once 'views/'.$route->getControllerName().'/'.$route->getMethodName().'.php';
$loader= new Twig_Loader_Filesystem("./views");
$twig= new Twig_Environment($loader,["cache"=>"./twig-cache","auto_reload"=>true]);
echo $twig->render($route->getControllerName().'/'.$route->getMethodName().'.html',$data);