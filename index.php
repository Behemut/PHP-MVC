<?php
require_once('./app.php');


use Controller\CustomerController;
use Controller\PlanController;
use MVC\Router;


$router = new Router();
    $router->get('/',[CustomerController::class,'getCustomer']);
    $router->post('/',[CustomerController::class,'postCustomer']);
    $router->get('/delete/customer',[CustomerController::class,'getDeleteCustomer']);
    $router->post('/delete/customer',[CustomerController::class,'postDeleteCustomer']);
    $router->get('/edit/customer',[CustomerController::class,'getEditCustomer']);
    $router->post('/edit/customer',[CustomerController::class,'postEditCustomer']);


    $router->get('/plan',[PlanController::class,'getPlan']);


    $router->comprobarRutas();

?>