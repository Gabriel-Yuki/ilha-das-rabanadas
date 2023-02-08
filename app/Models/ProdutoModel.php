<?php

namespace App\Models;

class ProdutoModel extends Conn
{

    public string $nome, $tipo, $descricao;
    public float $preco;
    public string $img_prod;
    public int $id;

    private object $conn;
    public function __construct()
    {
        $this->conn = $this->connect();
    }
    public function selectById(int $id)
    {
        $query = "SELECT * FROM produto WHERE id=?";
        $stmt = $this->conn->prepare($query);
        $stmt->bindValue(1, $id);
        $stmt->execute();
        return $stmt->fetchAll();
    }
    public function listar()
    {

        $query = "SELECT * FROM produto";
        $stmt = $this->conn->prepare($query);
        $stmt->execute();
        return $stmt->fetchAll();
    }
    public function insert()
    {
        $nome = $this->nome;
        $descricao = $this->descricao;
        $tipo = $this->tipo;
        $preco = $this->preco;
        $img_prod = $this->img_prod;

        $query = "INSERT INTO produto (nome,descricao,tipo,preco,img_prod) VALUES (?,?,?,?,?)";
        $stmt = $this->conn->prepare($query);
        $stmt->bindValue(1, $nome);
        $stmt->bindValue(2, $descricao);
        $stmt->bindValue(3, $tipo);
        $stmt->bindValue(4, $preco);
        $stmt->bindValue(5, $img_prod);
        


        $stmt->execute();
    }
    public function delete(int $id)
    {
        $query = "DELETE FROM `produto` WHERE id = ?";
        $stmt = $this->conn->prepare($query);
        $stmt->bindValue(1, $id);
        $stmt->execute();
    }
    public function update()
    {
        $id = $this->id;
        $nome = $this->nome;
        $descricao = $this->descricao;
        $tipo = $this->tipo;
        $preco = $this->preco;
        $img_prod = $this->img_prod;
        $query = "UPDATE produto SET nome=?,descricao=?,tipo=?,preco=?,img_prod=? WHERE id = ? ";
        $stmt = $this->conn->prepare($query);
        $stmt->bindValue(1, $nome);
        $stmt->bindValue(2, $descricao);
        $stmt->bindValue(3, $tipo);
        $stmt->bindValue(4, $preco);
        $stmt->bindValue(5, $img_prod);
        $stmt->bindValue(6, $id);


        $stmt->execute();
    }
}
