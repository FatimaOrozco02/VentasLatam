<?php

declare(strict_types=1);

namespace App\Controllers;

use Core\Controller;

final class EditController  extends Controller
{

   public function edit(): void
   {
      $this->render('edits/edit');
   }

   public function form(): void
   {
      $this->render('edits/form');
   }
}
