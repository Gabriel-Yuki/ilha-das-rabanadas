<?php

namespace App\Controllers;

use Core\ConfigView;

class Adm extends Produto
{
    private $dados;
    private object $produtoModel;
    public function __construct()
    {
        $this->produtoModel = new \App\Models\ProdutoModel(); //instanciando a class model

    }
    public function index()
    {
        $dashboard = new ConfigView("Adm/Dashboard");
        $dashboard->renderizar();
    }
    public function pedidos()
    {
        $Pedidos = new ConfigView("Adm/Pedidos");
        $Pedidos->renderizar();
    }
    public function produtos()
    {
        $this->dados['produtos'] = $this->produtoModel->listar(); //chamando todos os itens do db
     
        $Produtos = new ConfigView("Adm/Produtos",$this->dados);
        $Produtos->renderizar();
    }
}
