<?php

declare(strict_types=1);

namespace App\Controllers;
use Core\Controller;

final class BudgetController  extends Controller {

    public function  advisor(): void{
        $this->render('budget/budget');

    }

    public function  goal(): void{
        $this->render('budget/budget_goal');

    }


    public function  sale(): void{
        $this->render('budget/budget_sale');

    }



    
    
}