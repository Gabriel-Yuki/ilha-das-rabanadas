<?php

namespace App\Controllers;

use App\Models\ProdutoModel;

class Produto extends Upload
{

    private array $datas;
    private object $produtoDao;

    public function __construct()
    {
        $this->produtoDao = new \App\Helpers\ProdutoDao();
    }
    public function index()
    {


        $this->datas['produtos'] = $this->produtoDao->listProducts(); //chamando todos os itens do db
        $carregarView = new \Core\ConfigView("Produto/Cardapio", $this->datas);
        $carregarView->renderizar();
    }
    public function insert()
    {
        $status = $this->produtoDao->insert();
        if ($status) {
            header("Location: ../adm/produtos");
        }
    }
    public function form()
    {
        $cadastro = new \Core\ConfigView("Produto/CadastrarProduto");
        $cadastro->renderizar();
    }

    public function update()

    {
        $this->produtoModel->id = filter_input(INPUT_POST, 'id', FILTER_SANITIZE_NUMBER_INT);
        $this->produtoModel->titulo = filter_input(INPUT_POST, 'titulo', FILTER_SANITIZE_SPECIAL_CHARS);
        $this->produtoModel->conteudo = filter_input(INPUT_POST, 'conteudo', FILTER_SANITIZE_SPECIAL_CHARS);
        $this->produtoModel->update();
        header('Location: ./index');
    }
    public function delete()
    {
        $id = $_GET['id'];
        if ($this->produtoDao->delete($id)) {
            header('Location: ../adm/produtos');
        } else {
            $_SESSION['msg'] = "Não foi possivel deletar esse produto!Verifique se há algum pedido!";
            header('Location: ../adm/produtos');
        }
    }
}
