<?php

namespace App\Controllers;

use Core\ConfigHome;
use Core\ConfigView;

class Home
{
    private $dados;
    private string $pathHome = "Home";
    public function index()
    {
        $carregarhome = new ConfigView($this->pathHome . "/home");
        $carregarhome->renderizar();
    }
    public function sobre(){
        $carregarhome = new ConfigView("Sobre/Sobre");
        $carregarhome->renderizar();

    }
   
}
