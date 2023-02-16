<?php


namespace App\Controllers;
use Core\ConfigView;
class Carregar
{

    public function form()
    {
        $carregarview = new \Core\ConfigView("form");
        $carregarview->renderizar();
    }
}
