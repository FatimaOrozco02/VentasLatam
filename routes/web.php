<?php

declare(strict_types=1);

use Core\Log;
use Core\Router;

// Rutas sin autenticación
$router->get("/", "HomeController@index");
$router->get("/logout", "AuthController@logout");

$router->get("/dashboard", "DashboardController@home");
$router->get("/editar", "EditController@edit");
$router->get("/editar/form", "EditController@form");
