<?php

declare(strict_types=1);

namespace App\Controllers;

use Core\Controller;

final class AdviserController  extends Controller
{

   public function adviser(): void
   {
      $this->render('advisers/adviser');
   }
}
