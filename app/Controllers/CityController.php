<?php

declare(strict_types=1);

namespace App\Controllers;

use Core\Controller;

final class CityController  extends Controller
{

   public function city(): void
   {
      $this->render('cities/city');
   }
}
