<?php

namespace App\Controllers;

use Core\ConfigView;

class Cliente
{
    private  $idLogin, $id,$rua,$bairro,$numero;
    private object $clienteDao;
    private  array $datas;
    private string $pathView = "\Cliente";


    public function __construct()
    {
        $this->clienteDao = new \App\Helpers\ClienteDao();
        $this->idLogin = $_SESSION["idLogin"];
        $this->id = $this->clienteDao->selectByIdLogin($this->idLogin)[0]['idCliente'];
        $this->rua = $this->clienteDao->selectByIdLogin($this->idLogin)[0]['rua'];
        $this->bairro = $this->clienteDao->selectByIdLogin($this->idLogin)[0]['bairro'];

        $this->numero = $this->clienteDao->selectByIdLogin($this->idLogin)[0]['numero'];




    }
    public function index()
    {



        $dashboard = new ConfigView($this->pathView . "\Dashboard");
        $dashboard->renderizar();
    }
    public function perfil()
    {

        $this->datas["informations"] = $this->clienteDao->selectByIdLogin($this->id);

        $perfil = new ConfigView($this->pathView . "\Perfil", $this->datas);
        $perfil->renderizar();
    }
    public function meusPedidos()
    {




        $this->datas["request"] = $this->clienteDao->myRequests($this->id);


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

    public function minhascompras()
    {
        $teste = new ConfigView($this->pathView . "\minhascompras");
        $teste->renderizar();
    }
    public function getId()
    {
        return $this->id;
    }
    public function getAddress()
    {
        $address = $this->rua.", ".$this->numero.", ".$this->bairro;
        return $address;
    }
}
