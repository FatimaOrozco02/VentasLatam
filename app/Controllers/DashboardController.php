<?php

declare(strict_types=1);

namespace App\Controllers;
use Core\Controller;

final class DashboardController  extends Controller {

    public function  home(): void{
        $this->render('dashboard/dashboard');

    }

    
    
}