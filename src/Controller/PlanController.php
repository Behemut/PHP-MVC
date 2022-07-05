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


}


?>