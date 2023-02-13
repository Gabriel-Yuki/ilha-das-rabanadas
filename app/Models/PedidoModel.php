<?php

namespace App\Models;

class PedidoModel extends Conn
{
    public $idRequest;


    private object $conn;
    public function __construct()
    {
        $this->conn = $this->connect();
    }
    public function update(int $id)

    {
        echo $id;
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
}
