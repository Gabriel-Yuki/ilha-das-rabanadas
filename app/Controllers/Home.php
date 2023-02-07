<?php

namespace App\Controllers;
use Core\ConfigHome;
use Core\ConfigView;

class Home
{
    private $dados;
    public function index()
    {
        $carregarhome= new ConfigView("Home/home",$this->dados);
        $carregarhome->renderizar();
    }
}
