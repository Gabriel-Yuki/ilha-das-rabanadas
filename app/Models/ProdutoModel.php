<?php

namespace App\Models;

class ProdutoModel extends Conn
{

    public string $nomeProduto, $categoria, $descricao, $preco, $imgProduto;
    public  $id;

    private object $conn;
    public function __construct()
    {
        $this->conn = $this->connect();
    }
    public function selectById($id)
    {
        $query = "SELECT * FROM produto WHERE idProduto=?";
        $stmt = $this->conn->prepare($query);
        $stmt->bindValue(1, $id);
        $stmt->execute();
        return $stmt->fetchAll();
    }
    public function listProducts()
    {

        $query = "SELECT * FROM `produto`";
        $stmt = $this->conn->prepare($query);
        $stmt->execute();
        return   $stmt->fetchAll();
    }
    public function insert()
    {


        $query = "INSERT INTO produto (nomeProduto,descricao,categoria,preco,imagem ) VALUES (?,?,?,?,?)";
        $stmt = $this->conn->prepare($query);
        $stmt->bindValue(1,  $this->nomeProduto);
        $stmt->bindValue(2, $this->descricao);
        $stmt->bindValue(3, $this->categoria);
        $stmt->bindValue(4, $this->preco);
        $stmt->bindValue(5, $this->imgProduto);



        return $stmt->execute();
    }
    public function delete()
    {
        if ($this->orderedProduct($this->id) > 0) {
            return "false";
        } else {

            $query = "DELETE FROM `produto` WHERE idProduto = ?";
            $stmt = $this->conn->prepare($query);
            $stmt->bindValue(1, $this->id);
            $stmt->execute();
            return "true";
        }
    }
    public function update()
    {

        $query = "UPDATE `produto` SET nomeProduto=?,descricao=?,categoria=?,preco=?,imagem=?  WHERE idProduto = ?;";
        $stmt = $this->conn->prepare($query);
        $stmt->bindValue(1,  $this->nomeProduto);
        $stmt->bindValue(2, $this->descricao);
        $stmt->bindValue(3, $this->categoria);
        $stmt->bindValue(4, $this->preco);
        $stmt->bindValue(5, $this->imgProduto);
        $stmt->bindValue(6, $this->id);



        return $stmt->execute();
    }
    private function orderedProduct($id)
    {

        $query = "SELECT * FROM pedido WHERE idProduto=?";
        $stmt = $this->conn->prepare($query);
        $stmt->bindValue(1, $id);
        $stmt->execute();
        $ordersNumber = sizeof($stmt->fetchAll());
        return $ordersNumber;
    }
}
