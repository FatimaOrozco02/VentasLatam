<?php

declare(strict_types=1);

namespace App\Controllers;

use Core\Controller;

final class CountryController  extends Controller
{

   public function country(): void
   {
      $this->render('countries/country');
   }
}
