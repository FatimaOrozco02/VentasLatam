<?php

declare(strict_types=1);

namespace App\Controllers;

use Core\Controller;

final class EditorController  extends Controller
{

   public function editor(): void
   {
      $this->render('editors/editor');
   }
}
