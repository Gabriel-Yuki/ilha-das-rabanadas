<?php

namespace App\Controllers;

use Core\ConfigView;

class Login
{
    private object $clienteModel;
    private $dados;
    public function __construct()
    {
        $this->clienteModel = new \App\Models\ClienteModel(); //instanciando a class model

    }
    public function index()
    {
        $this->dados = filter_input_array(INPUT_POST, FILTER_DEFAULT);
        var_dump($this->dados);

        if (!empty($this->dados['SendLogin'])) {
            $status = new \App\Models\AdmsLogin();
            $status->login($this->dados);
            if ($status->getResultado()) {
                echo "logado";
            } else {
                echo 'invalido';
            }
        }
        $carregarView = new \Core\ConfigView("Login/login", $this->dados);

        $carregarView->renderizar();
    }
public function cadastrar(){
    $carregarView = new \Core\ConfigView("Login/Cadastro", $this->dados);

    $carregarView->renderizar();

}
    public function insert()
    {

        $this->clienteModel->nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_SPECIAL_CHARS);
        $this->clienteModel->sobrenome = filter_input(INPUT_POST, 'sobrenome', FILTER_SANITIZE_SPECIAL_CHARS);
        $this->clienteModel->cep = filter_input(INPUT_POST, 'cep', FILTER_SANITIZE_SPECIAL_CHARS);
        $this->clienteModel->rua = filter_input(INPUT_POST, 'rua', FILTER_SANITIZE_SPECIAL_CHARS);
        $this->clienteModel->numero = filter_input(INPUT_POST, 'numero', FILTER_SANITIZE_SPECIAL_CHARS);
        $this->clienteModel->bairro = filter_input(INPUT_POST, 'bairro', FILTER_SANITIZE_SPECIAL_CHARS);
        $this->clienteModel->cidade = filter_input(INPUT_POST, 'cidade', FILTER_SANITIZE_SPECIAL_CHARS);
        $this->clienteModel->email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_SPECIAL_CHARS);
        $this->clienteModel->senha = filter_input(INPUT_POST, 'senha', FILTER_SANITIZE_SPECIAL_CHARS);

        $this->clienteModel->insert();
        $carregarView = new \Core\ConfigView("Login/login", $this->dados);
        $carregarView->renderizar();
    }
}
