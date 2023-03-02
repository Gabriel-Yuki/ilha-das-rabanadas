<?php

namespace App\Controllers;

use Core\ConfigView;

class Login
{
    private object $loginModel;
    private object $clienteDao;
    private $dados;
    public function __construct()
    {
        $this->clienteDao = new \App\Helpers\ClienteDao(); //instanciando a class model
        $this->loginModel = new \App\Models\AdmsLogin();
    }
    public function index()
    {
        $this->dados = filter_input_array(INPUT_POST, FILTER_DEFAULT);

        if (!empty($this->dados['sendLogin'])) {
            $this->loginModel->login($this->dados);
            if ($this->loginModel->getResultado()) {
                echo "logado";
                if ($_SESSION['idLogin'] == 1) {
                    return header("Location:../adm/index");
                }
                $_SESSION['msg']="Bem-vindo a Ilha!!";
                return  header("Location:../home/index");
            } else {
                $this->dados['form'] = $this->dados;
            }
        }

        $carregarView = new \Core\ConfigView("Login/login", $this->dados);

        $carregarView->renderizar();
    }
    public function cadastrar()
    {
        $carregarView = new \Core\ConfigView("Login/cadastro", $this->dados);

        $carregarView->renderizar();
    }
    public function insert()
    {
        $password = filter_input(INPUT_POST, 'senha', FILTER_SANITIZE_SPECIAL_CHARS);
        $password = password_hash($password, PASSWORD_DEFAULT);
        $login = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_SPECIAL_CHARS);

        $this->loginModel->insert($password, $login);
        $idLogin = $this->loginModel->getidLogin($login)[0];
        $this->clienteDao->insert($idLogin);
        header('Location: ../login/index');
    }
}
