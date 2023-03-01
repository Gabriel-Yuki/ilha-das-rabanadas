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


        $this->datas['products'] = $this->produtoDao->listProducts(); //chamando todos os itens do db
        $carregarView = new \Core\ConfigView("Produto/Cardapio", $this->datas);
        $carregarView->renderizar();
    }
    public function insert()
    { // {  $teste = filter_input_array(INPUT_POST, FILTER_DEFAULT);
        //     var_dump($teste);
        $status = $this->produtoDao->insert();
        if ($status) {
            $_SESSION['msg'] = "Cadastrado com sucesso!";


            header("Location: ../adm/produtos");
        } else {

            $_SESSION['msg'] = "Verifique se todos os campos estão preenchidos!";

            header("Location: ../adm/cadastrarproduto");
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
        echo $this->produtoDao->delete();

        if ($this->produtoDao->delete() == "true") {
            $_SESSION['msg'] = "Deletado com sucesso!";
            header('Location: ../adm/produtos');
        } else {
            $_SESSION['msg'] = "Falha ao deletar! Verifique se esse produto foi pedido!";
            header('Location: ../adm/produtos');
        }
    }
}
