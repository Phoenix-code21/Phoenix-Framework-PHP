<?php 

/* Config Router */
use CoffeeCode\Router\Router;
$router = new Router(BASE_URL);

/* WEB */
$router->group(null)->namespace("App\\Controller");
$router->get("/", 'HomeController:index');


/* Router Error */
$router->group("error")->namespace("App\\Error");
$router->get("/404", 'ErrorController:web404');

$router->dispatch();

if ($router->error()) {
    $router->redirect("/error/{$router->error()}");
}
