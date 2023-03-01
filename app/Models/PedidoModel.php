<?php

namespace App\Models;

class PedidoModel extends Conn
{
    public $idRequest;
    public string $dataEntrega, $hora, $valorPedido, $quantidadePedido, $endereco;
    public $idCliente, $idProduto;


    private object $conn;
    public function __construct()
    {
        $this->conn = $this->connect();
    }
  
    public function insert()
    {

        $query = "INSERT INTO pedido (dataEntrega,hora,valorPedido,quantidadePedido,idCliente,idProduto,endereco) VALUES  (?,?,?,?,?,?,?)";
        $stmt = $this->conn->prepare($query);
        $stmt->bindValue(1, $this->dataEntrega);
        $stmt->bindValue(2, $this->hora);
        $stmt->bindValue(3, $this->valorPedido);
        $stmt->bindValue(4, $this->quantidadePedido);
        $stmt->bindValue(5, $this->idCliente);
        $stmt->bindValue(6, $this->idProduto);
        $stmt->bindValue(7, $this->endereco);
        $stmt->execute();
    }
   
    public function delete(int $id)
    {
        try {

            $query = "DELETE FROM `pedido` WHERE `idPedido` = ?";
            $stmt = $this->conn->prepare($query);
            $stmt->bindValue(1, $id);
            $stmt->execute();
            return true;
        } catch (\Throwable $e) {
            return false;
        }
    }
    public function listOrders()
    {

        $query = "SELECT * FROM pedido";
        $stmt = $this->conn->prepare($query);
       $stmt->execute();
       $datas=$stmt ->fetchAll();
       return $datas;
    }
}
