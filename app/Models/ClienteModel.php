<?php

namespace App\Models;

class ClienteModel extends Conn
{
    

    private $conn;
    public function __construct()
    {
        $this->conn = $this->connect();
    }
    public function insert()
    {


        $query = "INSERT INTO cliente (nomeCliente,sobrenome,numeroCliente,residencialCliente,cep,rua,bairro,numero,idLogin') VALUES (?,?,?,?,?,?,?,?,?,?);";

        $password=md5($this->password);
        $stmt = $this->conn->prepare($query);
        $stmt->bindValue(1, $this->name);
        $stmt->bindValue(2, $this->lastname);
        $stmt->bindValue(3, $this->phoneNumber);
        $stmt->bindValue(4, $this->residentialNumber);
        $stmt->bindValue(5, $this->zipCode);
        $stmt->bindValue(6, $this->street);
        $stmt->bindValue(7, $this->district);
        $stmt->bindValue(8, $this->number);
        $stmt->bindValue(9, $this->city);
     


        $stmt->execute();
    }
    public function update($id,$name,$lastName,$zipCode,$street,$number,$district,$city,$residentialNumber,$phoneNumber)
    {

        $query = "UPDATE cliente SET nomeCliente=?,sobrenome=?,numeroCliente=?,residencialCliente=?,cep=?,rua=?,bairro=?,numero=?,cidade=? WHERE idCliente= ?";
        $stmt = $this->conn->prepare($query);
        $stmt->bindValue(1, $name);
        $stmt->bindValue(2, $lastName);
        $stmt->bindValue(3, $phoneNumber);
        $stmt->bindValue(4, $residentialNumber);
        $stmt->bindValue(5, $zipCode);
        $stmt->bindValue(6, $street);
        $stmt->bindValue(7, $district);
        $stmt->bindValue(8, $number);
        $stmt->bindValue(9, $city);
        $stmt->bindValue(10,  $id);
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
      public function myRequests($id)
    {
        $query = "SELECT * FROM pedido WHERE idCliente=?";
        $stmt = $this->conn->prepare($query);
        $stmt->bindValue(1, $id);
        $stmt->execute();
        return $stmt->fetchAll();
    }
}
