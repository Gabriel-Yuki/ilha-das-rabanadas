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

        $Produtos = new ConfigView("Adm/Produtos", $this->dados);
        $Produtos->renderizar();
    }
    public function cadastrarproduto()

    {
        $Produtos = new ConfigView("Adm/cadastrarproduto", $this->dados);
        $Produtos->renderizar();
    }
    public function setPath()
    {if (isset($_POST['enviar-formulario'])) :
        // setando os formatos permitidos
        $formatosPermitidos = array("png", "jpeg", "jpg", "gif", "webp");
        $quantidadeArquivos = count($_FILES['arquivos']['name']);
        $contador = 0;
        while ($contador < $quantidadeArquivos) :
            //pegando a extensao do arquivo com a função pathinfo()

            $extensao = pathinfo($_FILES['arquivos']['name'][$contador], PATHINFO_EXTENSION);
            // verificnado se o valor da extensao existe no array formatosPermitidos com in_array (valor a ser procurado, array que que sera feita a busca)
            if (in_array($extensao, $formatosPermitidos)) :
                // add o caminho da img
                $pasta = URL . "/public/arquivos/";
                // pegando o caminho do arquivo
                $temporario = $_FILES['arquivos']['tmp_name'][$contador];

                $novoNome = uniqid() . ".$extensao";
                // verificando se houve realmente o upload. move_uploaded_file(arquivo a ser movido, pasta em que contera o arquivo movido)
                if (move_uploaded_file($temporario, $pasta . $novoNome)) :
                    // se for vdd mostra a mensagem
                    echo "upload feito com sucesso";

                else :
                    echo "Nao foi possivel fazer o upload";
                endif;

            else :
                echo "$extensao é formato invalido";
            endif;
            $contador++;
        endwhile;
    endif;
    }
}
