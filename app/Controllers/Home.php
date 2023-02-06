<?php

namespace App\Controllers;
use Core\ConfigHome;

class Home
{
    public function index()
    {
        $carregarhome= new ConfigHome("Views/home/home");
        $carregarhome->renderizar();
    }
}
