<?php

namespace App\Controllers;

use Core\ConfigView;

class Adm
{

    public function index()
    {
        $dashboard = new ConfigView("Adm/Dashboard");
        $dashboard->renderizar();
    }
}
