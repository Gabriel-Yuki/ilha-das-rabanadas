<?php

namespace App\Controllers;

use App\Models\Conn;
use App\Models\PedidoModel;
use Core\ConfigView;

class Pedido
{
    public object $pedidoModel;
    public function __construct()
    {
        $this->pedidoModel = new \App\Models\pedidoModel(); //instanciando a class model

    }
    public function update(){
        
        $id = $_GET['id'];
        $response =  $this->pedidoModel->update($id);

    }

    public function delete()
    {

        $id = $_GET['id'];
        $response =  $this->pedidoModel->delete($id);
        if ($response) {
            echo "ok";
            die;
        }
        echo "ERROR";
    }
}
