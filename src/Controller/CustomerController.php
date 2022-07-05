<?php

namespace Controller;

use MVC\Router;
use Model\Customer;

class CustomerController{

    public static function getCustomer(Router $router)
    {
        $clients= new Customer();
        $clientes = $clients->getCustomer();
        $router->render('Customers/home', ['customers' => $clientes]);
    }
    public static function postCustomer(Router $router)
    {
        $client = new Customer($_POST);
        $client->postCustomer();
        $router->redirect('/');
    }
    public static function getDeleteCustomer(Router $router)
    {
        $id = $_GET['id'] ?? null;
        $clients= new Customer();
        $clientes = $clients->getDeleteCustomer($id);
        $router->render('Customers/delete', ['customers' => $clientes]);
    }

    public static function postDeleteCustomer(Router $router)
    {
        $id = $_POST['id'] ?? null;
        $clients= new Customer();
        $clients->postDeleteCustomer($id);
        $router->redirect('/');
    }

    public static function getEditCustomer(Router $router)
    {
        $id = $_GET['id'] ?? null;
        $clients= new Customer();
        $clientes = $clients->getEditCustomer($id);
        $router->render('Customers/edit', ['customers' => $clientes]);
    }

    public static function postEditCustomer(Router $router)
    {
        $id = $_POST['id'] ?? null;
        $clients= new Customer($_POST);
        $clients->postEditCustomer($id);
        $router->redirect('/');
    }
    
}


?>