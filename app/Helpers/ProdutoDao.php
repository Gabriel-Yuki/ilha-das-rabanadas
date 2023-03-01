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
    public function selectById($id)

    {
        $informations = $this->produtoModel->selectById($id);
        return $informations;     # code...
    }
    public function listProducts()
    {
        $produtos = $this->produtoModel->listProducts(); //chamando todos os itens do db
        return $produtos;
    }
    public function insert()
    {
        $inputs = filter_input_array(INPUT_POST, FILTER_DEFAULT);
        foreach ($inputs as $k) {
            if ($k === "") {
                return false;
            }
        }




        if (isset($_FILES['arquivo']) && $_FILES['arquivo']['error'] !== 4) {
            $upload = new \App\Controllers\Upload($_FILES["arquivo"]);
            if ($upload) {
                $imgdb = $this->pathImageDb . "/" . $_FILES["arquivo"]["name"];
                $this->produtoModel->nomeProduto = filter_input(INPUT_POST, 'nomeProduto', FILTER_SANITIZE_SPECIAL_CHARS);
                $this->produtoModel->descricao = filter_input(INPUT_POST, 'descricao', FILTER_SANITIZE_SPECIAL_CHARS);
                $this->produtoModel->preco = filter_input(INPUT_POST, 'preco', FILTER_SANITIZE_SPECIAL_CHARS);
                $this->produtoModel->categoria = filter_input(INPUT_POST, 'categoria', FILTER_SANITIZE_SPECIAL_CHARS);
                $this->produtoModel->imgProduto = $imgdb;
                $status = $this->produtoModel->insert();
                if ($status) {
                    return true;
                }
                return false;
            }
        }
        return false;
    }
    public function update()
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

                $this->produtoModel->id = filter_input(INPUT_POST, 'id', FILTER_SANITIZE_SPECIAL_CHARS);
                $status = $this->produtoModel->update();
                return $status;
            }
        }
    }
    public function delete()

    {

        $this->produtoModel->id = filter_input(INPUT_POST, 'id', FILTER_SANITIZE_SPECIAL_CHARS);
 return $this->produtoModel->delete();
    }
}
