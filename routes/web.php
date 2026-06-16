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


$router->get("/editar", "EditController@edit");
$router->get("/editar/form", "EditController@form");
$router->get("/editores", "EditorController@editor");
$router->get("/productos", "ProductController@product");
$router->get("/asesores", "AdviserController@adviser");
$router->get("/clientes", "ClientController@client");
$router->get("/paises", "CountryController@country");
$router->get("/regiones", "RegionController@region");
$router->get("/estados", "StateController@state");
$router->get("/ciudades", "CityController@city");
