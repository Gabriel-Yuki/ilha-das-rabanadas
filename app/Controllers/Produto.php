<?php

namespace App\Controllers;

use App\Models\ProdutoModel;

class Produto
{

    private array $dados;
    private object $produtoModel;
    public function __construct()
    {
        $this->produtoModel = new \App\Models\ProdutoModel(); //instanciando a class model

    }
    public function index()
    {


        $this->dados['produtos'] = $this->produtoModel->listar(); //chamando todos os itens do db
        $carregarView = new \Core\ConfigView("Produto/Cardapio", $this->dados);
        $carregarView->renderizar();
    }
    public function insert()
    {
        //
        $this->produtoModel->nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_SPECIAL_CHARS);
        $this->produtoModel->descricao = filter_input(INPUT_POST, 'descricao', FILTER_SANITIZE_SPECIAL_CHARS);
        $this->produtoModel->preco = filter_input(INPUT_POST, 'preco', FILTER_SANITIZE_SPECIAL_CHARS);
        $this->produtoModel->tipo = filter_input(INPUT_POST, 'tipo', FILTER_SANITIZE_SPECIAL_CHARS);
        $this->produtoModel->img_prod = ""; //terminar de fazer
        $this->produtoModel->insert();
        header('Location: ./index');
    }
    public function form()
    {
        $carregarView = new \Core\ConfigView("Produto/CadastrarProduto", []);
        $carregarView->renderizar();
    }
    public function editar_artigo()
    {
        $id = $_GET['id'];
        $this->dados['artigo'] = $this->produtoModel->selectById($id);
        $carregarView = new \Core\ConfigView("Produto/AtualizarProduto", $this->dados);
        $carregarView->renderizar();
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
        $this->produtoModel->delete($id);
        header('Location: ./index');
    }
}
