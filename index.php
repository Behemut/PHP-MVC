<?php
require_once('./app.php');


use Controller\CustomerController;
use Controller\PlanController;
use MVC\Router;


$router = new Router();
    $router->get('/',[CustomerController::class,'getCustomer']);
    $router->post('/',[CustomerController::class,'postCustomer']);
    $router->get('/delete/customer',[CustomerController::class,'getDeleteCustomer',   ]);
    $router->post('/delete/customer',[CustomerController::class,'postDeleteCustomer']);
    //$router->get('/edit/customer',[CustomerController::class,'getEditCustomer']);
    //$router->post('/edit/customer',[CustomerController::class,'postEditCustomer']);


    $router->get('/queries/customer',[CustomerController::class,'getEditCustomer']);
    $router->post('/queries/customer',[CustomerController::class,'postAddPlan']);


    $router->get('/plan',[PlanController::class,'getPlan']);
    $router->post('/plan',[PlanController::class,'postPlan']);
    $router->get('/delete/plan',[PlanController::class,'getDeletePlan']);
    $router->post('/delete/plan',[PlanController::class,'postDeletePlan']);
    $router->get('/edit/plan',[PlanController::class,'getEditPlan']);
    $router->post('/edit/plan',[PlanController::class,'postEditPlan']);

    $router->comprobarRutas();

?>