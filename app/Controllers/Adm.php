<?php

namespace App\Controllers;

use Core\ConfigView;

class Adm
{
    private $idPedido;
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
        $this->datas['request'] = $this->pedidoDao->listOrders();
        $pedido = new \Core\ConfigView('Adm/Pedidos', $this->datas);
        $pedido->renderizar();
    }
    public function produtos()
    {
        $this->datas['products'] = $this->produtoDao->listProducts();
        $Produtos = new ConfigView("Adm/Produtos", $this->datas);
        $Produtos->renderizar();
    }
    public function cadastrarproduto()

    {
        $Produtos = new ConfigView("Adm/CadastrarProduto");
        $Produtos->renderizar();
    }
    public function atualizarProduto()
    {
        $id = $_GET["id"];
        $this->datas["informations"]  = $this->produtoDao->selectById($id);

        $formAtualizar = new ConfigView("Adm/AtualizarProduto", $this->datas);
        $formAtualizar->renderizar();
    }
    public function editarPedido()
    {
        $_SESSION["idPedido"] = $_GET["idPedido"];
        $this->datas['products'] = $this->produtoDao->listProducts();

        $cardapioEdit = new ConfigView("Produto/CardapioEdit", $this->datas);
        $cardapioEdit->renderizar();
    }
    public function editPedido()
    {
        $id = $_GET["id"];
        $idPedido = $_SESSION["idPedido"];
        $this->datas['prdutos'] = $this->produtoDao->selectById($id);
        $this->datas["pedido"] = $this->pedidoDao->getById($idPedido);
        $carrinhoEdit = new ConfigView("Adm/carrinhoEdit", $this->datas);
        $carrinhoEdit->renderizar();
    }
    public function deletePedido()
    {
        $idPedido = $_GET['id'];
        $this->pedidoDao->delete($idPedido);
        $_SESSION['msg'] = "Deletado com sucesso";
        header('Location: ../adm/pedidos');
    }
}
