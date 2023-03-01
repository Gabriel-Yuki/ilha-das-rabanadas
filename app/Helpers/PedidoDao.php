<?php

namespace App\Helpers;

use App\Models\PedidoModel;

class PedidoDao


{

    private object $pedidoModel;
    public function __construct()
    {
        $this->pedidoModel = new \App\Models\PedidoModel(); //instanciando a class model

    }
    public function listOrders()
    {
        return $this->pedidoModel->listOrders();
    }
    public function insert()

    {

        $data = filter_input(INPUT_POST, 'dataEntrega', FILTER_SANITIZE_SPECIAL_CHARS);
        $data = implode("/", array_reverse(explode("-", $data)));
        $this->pedidoModel->idCliente = filter_input(INPUT_POST, 'idCliente', FILTER_SANITIZE_SPECIAL_CHARS);
        $this->pedidoModel->idProduto = filter_input(INPUT_POST, 'idProduto', FILTER_SANITIZE_SPECIAL_CHARS);
        $this->pedidoModel->quantidadePedido = filter_input(INPUT_POST, 'quantidadePedido', FILTER_SANITIZE_SPECIAL_CHARS);
        $this->pedidoModel->valorPedido = filter_input(INPUT_POST, 'valorPedido', FILTER_SANITIZE_SPECIAL_CHARS);

        $this->pedidoModel->endereco = filter_input(INPUT_POST, 'endereco', FILTER_SANITIZE_SPECIAL_CHARS);
        $this->pedidoModel->dataEntrega = $data;
        $this->pedidoModel->hora = filter_input(INPUT_POST, 'hora', FILTER_SANITIZE_SPECIAL_CHARS);

        $this->pedidoModel->insert();
    }
    public function getById($idpedido)

    {
        return $this->pedidoModel->getById($idpedido);
    }
    public function edit()
    {
        $data = filter_input(INPUT_POST, 'dataEntrega', FILTER_SANITIZE_SPECIAL_CHARS);
        $data = implode("/", array_reverse(explode("-", $data)));
        $this->pedidoModel->idProduto = filter_input(INPUT_POST, 'idProduto', FILTER_SANITIZE_SPECIAL_CHARS);
        $this->pedidoModel->idPedido = filter_input(INPUT_POST, 'idPedido', FILTER_SANITIZE_SPECIAL_CHARS);
        $this->pedidoModel->quantidadePedido = filter_input(INPUT_POST, 'quantidadePedido', FILTER_SANITIZE_SPECIAL_CHARS);
        $this->pedidoModel->valorPedido = filter_input(INPUT_POST, 'valorPedido', FILTER_SANITIZE_SPECIAL_CHARS);

        $this->pedidoModel->endereco = filter_input(INPUT_POST, 'endereco', FILTER_SANITIZE_SPECIAL_CHARS);
        $this->pedidoModel->dataEntrega = $data;
        $this->pedidoModel->hora = filter_input(INPUT_POST, 'hora', FILTER_SANITIZE_SPECIAL_CHARS);

        $this->pedidoModel->edit();
    }
    public function delete($idPedido)
    {
        $this->pedidoModel->delete($idPedido);
    }
}
