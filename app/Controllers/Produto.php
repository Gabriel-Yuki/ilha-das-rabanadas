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
            $_SESSION['msg'] = "Cadastrado com sucesso!";

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
        $status = $this->produtoDao->update();
        if ($status) {
            $_SESSION['msg'] = "Atualizado com sucesso";
            header("Location: ../adm/produtos");
        }
    }
    public function delete()
    {
        $id = $_GET['id'];
        if ($this->produtoDao->delete($id)) {
            $_SESSION['msg'] = "Deletado com sucesso!";

            header('Location: ../adm/produtos');
        } else {
            $_SESSION['msg'] = "Não foi possivel deletar esse produto!Verifique se há algum pedido dele!";
            header('Location: ../adm/produtos');
        }
    }
}
