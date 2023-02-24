<?php

namespace App\Helpers;

use App\Models\PedidoModel;

class PedidoDao


{

    private object $pedidoModel;
    public function __construct()
    {
        $this->pedidoModel = new \App\Models\pedidoModel(); //instanciando a class model

    }
    public function listOrders()
    {
        $this->listOrders();
    }
}
