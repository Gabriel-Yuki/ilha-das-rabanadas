<?php

namespace App\Controllers;

use Core\ConfigView;

class Cliente
{
    private  $idLogin, $id;
    private object $clienteDao;
    private  array $datas;
    private string $pathView = "\Cliente";


    public function __construct()
    {
        $this->clienteDao = new \App\Helpers\ClienteDao();
        $this->idLogin = $_SESSION["idLogin"];
        $this->id = $this->clienteDao->selectByIdLogin($this->idLogin);
    }
    public function index()
    {



        $dashboard = new ConfigView($this->pathView . "\Dashboard");
        $dashboard->renderizar();
    }
    public function perfil()
    {

        $this->datas["informations"] = $this->clienteDao->selectByIdLogin($this->idLogin);

        $perfil = new ConfigView($this->pathView . "\Perfil", $this->datas);
        $perfil->renderizar();
    }
    public function meusPedidos()
    {

        $id = $_SESSION["idCliente"];
        $this->datas["request"] = $this->clienteDao->myRequests($id);


        $pedidos = new ConfigView($this->pathView . "\Pedidos", $this->datas);
        $pedidos->renderizar();
    }
    public function atualizarPerfil()
    {

        $this->datas["informations"] = $this->clienteDao->selectByIdLogin($this->idLogin);

        $formUpdate = new ConfigView($this->pathView . "\EditarPerfil", $this->datas);
        $formUpdate->renderizar();
    }
    public function update()
    {
        $this->clienteDao->update();


        header('Location:perfil');
    }

    public function minhasCompras()
    {
        $teste = new ConfigView($this->pathView . "\Carrinhocompras");
        $teste->renderizar();
    }
}
