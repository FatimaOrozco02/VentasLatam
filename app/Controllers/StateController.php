<?php

declare(strict_types=1);

namespace App\Controllers;

use Core\Controller;

final class StateController  extends Controller
{

   public function state(): void
   {
      $this->render('states/state');
   }
}
