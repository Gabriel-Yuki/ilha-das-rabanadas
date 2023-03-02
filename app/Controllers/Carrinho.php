<?php

namespace App\Controllers;

use Core\ConfigView;

class Carrinho
{
    public $idCliente = null;
    private object $carrinhoDao;
    private object $cliente, $pedido;
    private array $datas;
    public function __construct()
    {
        $this->carrinhoDao = new \App\Helpers\CarrinhoDao();
        $this->cliente = new \App\Controllers\Cliente();
        $this->pedido = new \App\Controllers\Pedido();
        $this->idCliente = $this->cliente->getId();
        $this->datas["address"] = $this->cliente->getAddress();
    }

    public function index()

    {
        if (isset($_SESSION['idLogin'])) {
            $idProduto = $_GET["id"];
            $this->carrinhoDao->insert($idProduto, $this->idCliente);
            return $this->getMyproducts();
        }
        $_SESSION['msg'] = "Precisa estar logado para encomendar um produto!!";
        header('Location:../login/index');
    }

    public function getMyproducts()

    {
        $this->datas['myProducts'] =  $this->carrinhoDao->getProducts($this->idCliente);

        $carrinho = new ConfigView("\Cliente\minhascompras", $this->datas);
        $carrinho->renderizar();
    }
    public function insert()
    {
        $this->pedido->insert();
    }
    
}
