<?php

namespace App\Controllers;

use App\Models\Conn;
use App\Models\PedidoModel;
use Core\ConfigView;

class Pedido
{
    public object $pedidoDao;
    public function __construct()
    {
        $this->pedidoDao = new \App\Helpers\pedidoDao(); //instanciando a class Dao

    }
    public function insert()
    {
$this->pedidoDao->insert();


}
    public function update(){
        
        $id = $_GET['id'];
        $response =  $this->pedidoDao->update($id);

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
    
}
