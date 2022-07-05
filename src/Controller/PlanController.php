<?php

namespace Controller;

use MVC\Router;
use Model\Plan;

class PlanController{

    public static function getPlan(Router $router)
    {
        $plans= new Plan();
        $planes = $plans->getPlan();
        $router->render('/Plans/home', ['plans' => $planes]);
    }
    public static function postPlan(Router $router)
    {
        $plan = new Plan($_POST);
        $plan->postPlan();
        $router->redirect('/plan');

    }
    public static function getDeletePlan(Router $router)
    {
        $id = $_GET['id'] ?? null;
        $plans= new Plan();
        $planes = $plans->getDeletePlan($id);
        $router->render('/Plans/delete', ['plans' => $planes]);
    }
    public static function postDeletePlan(Router $router)
    {
        $id = $_POST['id'] ?? null;
        $plans= new Plan();
        $plans->postDeletePlan($id);
        $router->redirect('/plan');
    }

    public static function getEditPlan(Router $router)
    {
        $id = $_GET['id'] ?? null;
        $plans= new Plan();
        $planes = $plans->getEditPlan($id);
        $router->render('/Plans/edit', ['plans' => $planes]);
    }
    public static function postEditPlan(Router $router)
    {
        $id = $_POST['id'] ?? null;
        $plans= new Plan($_POST);
        $plans->postEditPlan($id);
        $router->redirect('/plan');
    }
}


?>