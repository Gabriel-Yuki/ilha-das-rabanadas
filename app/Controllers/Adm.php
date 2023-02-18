<?php

namespace App\Controllers;

use Core\ConfigView;

class Adm
{
    private object $produtoDao;
    private array $datas;
    private object $pedidoDao;

    public function __construct()
    {
        $this->produtoDao = new \App\Helpers\ProdutoDao(); //instanciando a class model
        $this->pedidoDao = new \App\Helpers\PedidoDao(); //instanciando a class model

    }
    public function index()
    {
        $dashboard = new ConfigView("Adm/Dashboard");
        $dashboard->renderizar();
    }
    public function pedidos()
    {
        $this->datas["request"] = $this->pedidoDao->listOrders();
        $Pedido = new ConfigView("Adm/AreaPedidos", $this->datas["request"]);
        $Pedido->renderizar();
    }
    public function products()
    {
        $this->datas['products'] = $this->produtoDao->listProducts();
        $Produtos = new ConfigView("Adm/Produtos",$this->datas);
        $Produtos->renderizar();
    }
    public function cadastrarproduto()

    {
        $Produtos = new ConfigView("Adm/CadastrarProduto");
        $Produtos->renderizar();
    }
}
