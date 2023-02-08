<?php

namespace App\Controllers;

use Core\ConfigView;

class Cliente
{
    private object $clienteModel;
    private array $dados;
    private string $pathView = "\Cliente";


    public function __construct()
    {
        $this->clienteModel = new \App\Models\ClienteModel(); //instanciando a class model

    }
    public function index()
    {

        $dashboard = new ConfigView($this->pathView . "\Dashboard");
        $dashboard->renderizar();
    }
    public function MeusPedidos()
    {
    }
    public function atualizarPerfil()
    {
        $this->dados["informacoes"] = $this->clienteModel->selectById(1);

        $formUpdate = new ConfigView($this->pathView . "\EditarPerfil", $this->dados);
        $formUpdate->renderizar();
    }
    public function update()
    {
        $this->clienteModel->id = filter_input(INPUT_POST, 'id', FILTER_SANITIZE_SPECIAL_CHARS);


        $this->clienteModel->nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_SPECIAL_CHARS);
        $this->clienteModel->sobrenome = filter_input(INPUT_POST, 'sobrenome', FILTER_SANITIZE_SPECIAL_CHARS);
        $this->clienteModel->cep = filter_input(INPUT_POST, 'cep', FILTER_SANITIZE_SPECIAL_CHARS);
        $this->clienteModel->rua = filter_input(INPUT_POST, 'rua', FILTER_SANITIZE_SPECIAL_CHARS);
        $this->clienteModel->numero = filter_input(INPUT_POST, 'numero', FILTER_SANITIZE_SPECIAL_CHARS);
        $this->clienteModel->bairro = filter_input(INPUT_POST, 'bairro', FILTER_SANITIZE_SPECIAL_CHARS);
        $this->clienteModel->cidade = filter_input(INPUT_POST, 'cidade', FILTER_SANITIZE_SPECIAL_CHARS);
        $this->clienteModel->email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_SPECIAL_CHARS);
        $this->clienteModel->update();


        header('Location:meuPerfil');
    }
    public function meuPerfil()
    {
        $perfil = new ConfigView($this->pathView . "\Perfil");
        $perfil->renderizar();
    }
}
