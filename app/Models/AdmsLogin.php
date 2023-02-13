<?php

namespace App\Models;


class AdmsLogin extends Conn
{
    private bool $resultado = false;
    private $dados;
    private    $resultadoDb;


    private object $conn;
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
