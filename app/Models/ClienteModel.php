<?php

namespace App\Models;

class ClienteModel extends Conn
{

    public string $password, $name, $lastName, $phoneNumber, $zipCode, $street, $district, $number, $city;
    public $idCliente;
    private $conn;
    public function __construct()
    {
        $this->conn = $this->connect();
    }

    public function insert($idlogin)
    {


        $query = "INSERT INTO cliente (nomeCliente,sobrenome,numeroCliente,cep,rua,bairro,numero,cidade,idLogin) VALUES (?,?,?,?,?,?,?,?,?);";

        $stmt = $this->conn->prepare($query);
        $stmt->bindValue(1, $this->name);
        $stmt->bindValue(2, $this->lastName);
        $stmt->bindValue(3, $this->phoneNumber);
        $stmt->bindValue(4, $this->zipCode);
        $stmt->bindValue(5, $this->street);
        $stmt->bindValue(6, $this->district);
        $stmt->bindValue(7, $this->number);
        $stmt->bindValue(8, $this->city);
        $stmt->bindValue(9, $idlogin);



        $stmt->execute();
    }
    public function update()
    {

        $query = "UPDATE cliente SET nomeCliente=?,sobrenome=?,numeroCliente=?,cep=?,rua=?,bairro=?,numero=?,cidade=? WHERE idCliente= ?";
        $stmt = $this->conn->prepare($query);
        $stmt->bindValue(1, $this->name);
        $stmt->bindValue(2, $this->lastName);
        $stmt->bindValue(3, $this->phoneNumber);
        $stmt->bindValue(4, $this->zipCode);
        $stmt->bindValue(5, $this->street);
        $stmt->bindValue(6, $this->district);
        $stmt->bindValue(7, $this->number);
        $stmt->bindValue(8, $this->city);
        $stmt->bindValue(9,  $this->idCliente);
        $stmt->execute();
    }
    public function selectByIdLogin($id)
    {
        $query = "SELECT * FROM cliente WHERE idLogin=?";
        $stmt = $this->conn->prepare($query);
        $stmt->bindValue(1, $id);
        $stmt->execute();
        return $stmt->fetchAll();
    }
    public function selectById($id)
    {
        $query = "SELECT * FROM cliente WHERE idCliente=?";
        $stmt = $this->conn->prepare($query);
        $stmt->bindValue(1, $id);
        $stmt->execute();
        return $stmt->fetchAll();
    }
    public function myRequests($id)
    {
        $query = "SELECT
        *
    FROM
        cliente c
    INNER JOIN
        pedido a
    ON a.idCliente = c.idCliente";
        $stmt = $this->conn->prepare($query);
        $stmt->execute();
        $informationRequest = $stmt->fetchAll();
        return $informationRequest;
    }
}
