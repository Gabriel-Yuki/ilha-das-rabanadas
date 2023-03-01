<?php

namespace App\Controllers;

use App\Models\Conn;
use App\Models\PedidoModel;
use Core\ConfigView;

class Pedido
{
    private object $pedidoDao;
    private array $data;
    public function __construct()
    {
        $this->pedidoDao = new \App\Helpers\pedidoDao(); //instanciando a class Dao


    }
    public function insert()
    {
        $this->pedidoDao->insert();


        header('Location:../cliente/meusPedidos');
    }
    public function editarPedido()
    {
        $idPedido = $_GET["id"];
        $this->data["myProducts"] =  $this->pedidoDao->getById($idPedido);
        $editarPedido = new \Core\ConfigView("Cliente/EditarPedido", $this->data);
        $editarPedido->renderizar();
    }

    public function delete()
    {

        $id = $_GET['id'];
        $response =  $this->pedidoDao->delete($id);
        if ($response) {
            echo "ok";
            die;
        }
        echo "ERROR";
    }
    public function getById($idPedido)
    {
        return    $this->pedidoDao->getById($idPedido);
    }
    public function edit()
    {
        $this->pedidoDao->edit();
        header("Location:../adm/pedidos");
    }
}
