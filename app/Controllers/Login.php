<?php

namespace App\Controllers;

use Core\ConfigView;

class Login
{

    private $dados;
    public function index()
    {
        $this->dados = filter_input_array(INPUT_POST,FILTER_DEFAULT);
        var_dump($this->dados);

        if(!empty($this->dados['SendLogin'])){
            $status = new \App\Models\AdmsLogin();
            $status ->login($this->dados);
            if($status->getResultado()){
                echo "logado";
            }else{
                echo 'invalido';
            }
        }
        $carregarView = new \Core\ConfigView("Views/login/login", $this->dados);
    
        $carregarView->renderizar();
    }
}
