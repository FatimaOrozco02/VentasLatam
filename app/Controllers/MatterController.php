<?php

declare(strict_types=1);

namespace App\Controllers;
use Core\Controller;

final class MatterController  extends Controller {

    public function  index(): void{
        $this->render('matter/matter');

    }

    
    
}