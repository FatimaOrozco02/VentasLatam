<?php

declare(strict_types=1);

use Core\Log;
use Core\Router;

// Rutas sin autenticación
$router->get("/", "HomeController@index");
$router->get("/logout", "AuthController@logout");