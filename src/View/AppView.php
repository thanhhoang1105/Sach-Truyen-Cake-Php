<?php

declare(strict_types=1);

namespace App\View;

use Cake\View\View;


class AppView extends View
{

    public function initialize(): void
    {
        $this->loadHelper('Paginator', ['templates' => 'paginator-templates']);
        $this->loadHelper('Breadcrumbs');
    }
}
