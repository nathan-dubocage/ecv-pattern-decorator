<?php

declare(strict_types=1);

namespace App\Controller;

use App\Decorators\Decorator;

class Welcome extends Decorator
{
    public function render()
    {
        echo "Page d'accueil";
    }
}
