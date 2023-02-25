<?php

namespace App\Controllers;

use Core\ConfigView;

class Carrinho
{
    private $idCliente;
    private object $carrinhoDao;
    private object $cliente;
    private array $datas;
    public function __construct()
    {
        $this->carrinhoDao = new \App\Helpers\CarrinhoDao();
        $this->cliente = new \App\Controllers\Cliente();
        $this->idCliente = $this->cliente->getId();
        $this->datas["address"] = $this->cliente->getAddress();
    }

    public function index()

    {
        $idProduto = $_GET["id"];
        $this->carrinhoDao->insert($idProduto, $this->idCliente);
        $this->getMyproducts();
    }

    public function getMyproducts()

    {
        $this->datas['myProducts'] =  $this->carrinhoDao->getProducts($this->idCliente);

        $carrinho = new ConfigView("\Cliente\minhascompras", $this->datas);
        $carrinho->renderizar();
    }
}
