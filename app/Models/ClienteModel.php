<?php

namespace App\Models;

class ClienteModel extends Conn
{
    public string $nome, $sobrenome, $cep, $rua, $numero, $bairro, $cidade, $email, $senha;
    private $conn;
    public function __construct()
    {
        $this->conn = $this->connect();
    }
    public function insert()
    {
        $nome = $this->nome;
        $sobrenome = $this->sobrenome;
        $cep = $this->cep;
        $rua = $this->rua;
        $numero = $this->numero;
        $bairro = $this->bairro;
        $cidade = $this->cidade;
        $email = $this->email;
        $senha = md5($this->senha);

        $query = "INSERT INTO cliente (nome,sobrenome,cep,rua,numero,bairro,cidade,email,senha) VALUES (?,?,?,?,?,?,?,?,?);";

        $stmt = $this->conn->prepare($query);
        $stmt->bindValue(1, $nome);
        $stmt->bindValue(2, $sobrenome);
        $stmt->bindValue(3, $cep);
        $stmt->bindValue(4, $rua);
        $stmt->bindValue(5, $numero);
        $stmt->bindValue(6, $bairro);
        $stmt->bindValue(7, $cidade);
        $stmt->bindValue(8, $email);
        $stmt->bindValue(9, $senha);


        $stmt->execute();
    }
    public function update()
    {
        $nome = $this->nome;
        $sobrenome = $this->sobrenome;
        $cep = $this->cep;
        $rua = $this->rua;
        $numero = $this->numero;
        $bairro = $this->bairro;
        $cidade = $this->cidade;
        $email = $this->email;
        $senha = md5($this->senha);

        $query = "UPDATE cliente SET (nome=?,sobrenome=?,cep=?,rua=?,numero=?,bairro=?,cidade=?,email=?,senha=?) WHERE id=?;";

        $stmt = $this->conn->prepare($query);
        $stmt->bindValue(1, $nome);
        $stmt->bindValue(2, $sobrenome);
        $stmt->bindValue(3, $cep);
        $stmt->bindValue(4, $rua);
        $stmt->bindValue(5, $numero);
        $stmt->bindValue(6, $bairro);
        $stmt->bindValue(7, $cidade);
        $stmt->bindValue(8, $email);
        $stmt->bindValue(9, $senha);
        $stmt->bindValue(9, $senha);

        $stmt->execute();
    }
}
