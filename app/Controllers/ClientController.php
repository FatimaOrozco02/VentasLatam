<?php

declare(strict_types=1);

namespace App\Controllers;

use Core\Controller;

final class ClientController  extends Controller
{

   public function client(): void
   {
      $this->render('clients/client');
   }
}
