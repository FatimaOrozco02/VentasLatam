<?php

declare(strict_types=1);

namespace App\Controllers;

use Core\Controller;

final class ProductController  extends Controller
{

   public function product(): void
   {
      $this->render('products/product');
   }
}
