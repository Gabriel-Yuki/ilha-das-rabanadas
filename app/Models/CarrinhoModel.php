<?php

namespace App\Models;

use function PHPSTORM_META\sql_injection_subst;

class CarrinhoModel extends Conn
{
    private object $conn;
    public function __construct()
    {
        $this->conn = $this->connect();
    }
    public function insert($idCliente, $idProduto)
    {
        $query = "INSERT INTO carrinho(idCliente,idProduto) VALUES (?,?) ";
        $stmt = $this->conn->prepare($query);
        $stmt->bindValue(1,  $idCliente);
        $stmt->bindValue(2,  $idProduto);
        $stmt->execute();
    }
    public function update($idCliente, $idProduto)
    {
        $query = "UPDATE carrinho SET idProduto=? WHERE idCliente = ?";
        $stmt = $this->conn->prepare($query);
        $stmt->bindValue(1,  $idProduto);
        $stmt->bindValue(2,  $idCliente);
        $stmt->execute();
    }
    public function verifyCart($id)
    {
        $query = "SELECT * FROM carrinho WHERE idCliente=?";
        $stmt = $this->conn->prepare($query);
        $stmt->bindValue(1,  $id);
        $stmt->execute();
        $clientCart = $stmt->fetchAll();
        return $clientCart;
    }
    public function getMyProducts($idCliente, $idProduto)
    {
        $query = "SELECT * FROM produto INNER JOIN carrinho  WHERE produto.idProduto =? AND carrinho.idCliente = ?;";
        $stmt = $this->conn->prepare($query);
        $stmt->bindValue(1,  $idProduto);
        $stmt->bindValue(2,  $idCliente);
        $stmt->execute();
        $clientCart = $stmt->fetchAll();
        return $clientCart;
    }
}
