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
    public function setPath()
    {
        if (isset($_POST['enviar-formulario'])) :
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
