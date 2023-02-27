<?php

namespace App\Models;


class AdmsLogin extends Conn
{
    private bool $resultado = false;
    private $dados;
    private    $resultadoDb;


    private object $conn;
    public function __construct()
    {
        $this->conn = $this->connect();
    }
    public function getResultado(): bool
    {
        return $this->resultado;
    }
    public function login(array $dados = null)

    {
        $this->dados = $dados;
        $this->conn =  $this->connect();
        $query = "SELECT * FROM login WHERE login=? LIMIT 1";
        $stmt = $this->conn->prepare($query);
        $stmt->bindValue(1, $this->dados['email'], \PDO::PARAM_STR);
        $stmt->execute();
        $this->resultadoDb = $stmt->fetch();
        if ($this->resultadoDb) {

            $this->validarSenha();
        } else {
            $_SESSION["msg"] = "Email não cadastrado";
            $this->resultado = false;
        }
    }
    public function insert($password, $login)
    {
        $query = "INSERT INTO login (login,senha) VALUES (?,?)";
        $stmt = $this->conn->prepare($query);
        $stmt->bindValue(1, $login);
        $stmt->bindValue(2, $password);
        $stmt->execute();
    }
    public function getidLogin($login)

    {
        $query = "SELECT idLogin FROM login WHERE login=?";
        $stmt = $this->conn->prepare($query);
        $stmt->bindValue(1, $login);
        $stmt->execute();
        $idlogin = $stmt->fetch();
        return $idlogin;
        # code...
    }
    private function validarSenha()
    {
        if (password_verify($this->dados['password'], $this->resultadoDb["senha"])) {
            $_SESSION["idLogin"] = $this->resultadoDb["idLogin"];
            $this->resultado = true;
        } else {
            $_SESSION["msg"] = "Senha ou email incorreto!";
            $this->resultado = false;
        }
    }
}
