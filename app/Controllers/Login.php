<?php

namespace App\Controllers;

use Core\ConfigView;

class Login
{
    private object $loginModel;
    private object $clienteModel;
    private $dados;
    public function __construct()
    {
        $this->clienteModel = new \App\Models\ClienteModel(); //instanciando a class model
        $this->loginModel = new \App\Models\AdmsLogin();
    }
    public function index()
    {
        $this->dados = filter_input_array(INPUT_POST, FILTER_DEFAULT);

        if (!empty($this->dados['sendLogin'])) {
            $this->loginModel->login($this->dados);
            if ($this->loginModel->getResultado()) {
                echo "logado";
                if ($_SESSION['idLogin'] == 1) {
                    return header("Location:../adm/index");
                }
                return  header("Location:../home/index");
            } else {
                $this->dados['form'] = $this->dados;
            }
        }

        $carregarView = new \Core\ConfigView("Login/login", $this->dados);

        $carregarView->renderizar();
    }
    public function cadastrar()
    {
        $carregarView = new \Core\ConfigView("Login/cadastro", $this->dados);

        $carregarView->renderizar();
    }
    public function insert()
    {


        $this->clienteModel->insert();
        $carregarView = new \Core\ConfigView("Login/login", $this->dados);
        $carregarView->renderizar();
    }
}
