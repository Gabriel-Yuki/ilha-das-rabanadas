<?php

namespace App\Controllers;


class Cliente{
    private object $clienteModel;
    private array $dados;

    public function __construct()
    {
        $this->clienteModel = new \App\Models\ClienteModel(); //instanciando a class model

    }
    public function index (){}
    public function cadastro(){

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