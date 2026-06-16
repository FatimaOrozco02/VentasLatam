<?php

declare(strict_types=1);

namespace App\Controllers;

use Core\Controller;

final class RegionController  extends Controller
{

   public function region(): void
   {
      $this->render('regions/region');
   }
}
