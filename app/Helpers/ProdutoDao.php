<?php

namespace App\Helpers;

use App\Models\ProdutoModel;

class ProdutoDao
{

    private object $produtoModel;
    private string $pathImageDb = "http://localhost/projetoIntegrador/public/imgs/uploads";

    public function __construct()
    {

        $this->produtoModel = new \App\Models\ProdutoModel(); //instanciando a class model

    }
    public function listProducts()
    {
        $produtos = $this->produtoModel->listProducts(); //chamando todos os itens do db
        return $produtos;
    }
    public function insert()
    {
        if (isset($_FILES)) {
            $upload = new \App\Controllers\Upload($_FILES["arquivo"]);
            if ($upload) {
                $imgdb = $this->pathImageDb . "/" . $_FILES["arquivo"]["name"];
                $this->produtoModel->nomeProduto = filter_input(INPUT_POST, 'nomeProduto', FILTER_SANITIZE_SPECIAL_CHARS);
                $this->produtoModel->descricao = filter_input(INPUT_POST, 'descricao', FILTER_SANITIZE_SPECIAL_CHARS);
                $this->produtoModel->preco = filter_input(INPUT_POST, 'preco', FILTER_SANITIZE_SPECIAL_CHARS);
                $this->produtoModel->categoria = filter_input(INPUT_POST, 'categoria', FILTER_SANITIZE_SPECIAL_CHARS);
                $this->produtoModel->imgProduto = $imgdb;
                $status = $this->produtoModel->insert();
                return $status;
            }
        }
    }
    public function delete($id)

    {
    $this->produtoModel->delete($id);    # code...
    }
}
