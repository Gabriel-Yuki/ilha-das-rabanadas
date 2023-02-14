<?php


namespace Core;


class Permissao
{


    private array $pagPublica;
    private array $pagRestrita;
    private string $urlController;
    private string $resultado;

    public function getResultado(): string
    {
        return $this->resultado;
    }
    public function index($urlController, $urlMetodo = null): void
    {
        $this->urlController = $urlController;

        if (isset($_SESSION["idLogin"]) &&  $this->urlController == "login") {
            header("Location:../home/index");
        }
        $this->pagPublica = ["login", "logout", "home", "sobre", "produto"];
        if (in_array($this->urlController, $this->pagPublica)) {
            $this->resultado = $this->urlController;
        } else {
            $this->pagRestrita();
        }
    }
    private function pagRestrita(): void
    {
        $this->pagRestrita = ["adm", "cliente"];
        if (in_array($this->urlController, $this->pagRestrita)) {
            $this->verificarLogin();
        } else {
            $_SESSION['msg'] = "<p class='text-danger' >ERROR</p>";

            header("Location:../login/index");
        }
    }
    private function verificarLogin(): void
    {

        if ($_SESSION["idLogin"] == 1 && $this->urlController == "adm") {
            $this->resultado = $this->urlController;
        } else if ($_SESSION["idLogin"] > 1 && $this->urlController == "cliente") {
            $this->resultado = $this->urlController;
        } else {
            header("Location:../home/index");
        }
    }
}
