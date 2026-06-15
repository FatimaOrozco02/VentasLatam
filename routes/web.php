<?php

declare(strict_types=1);

use Core\Log;
use Core\Router;

// Rutas sin autenticación
$router->get("/", "HomeController@index");
$router->get("/logout", "AuthController@logout");

$router->get("/dashboard", "DashboardController@home");
$router->get("/importar", "MatterController@index");


$router->group(["prefix" => "/presupuesto"], function (Router $router) {
            $router->get("/", "BudgetController@advisor");
            $router->get("/presupuesto_meta", "BudgetController@goal");
            $router->get("/venta", "BudgetController@sale");
        });

