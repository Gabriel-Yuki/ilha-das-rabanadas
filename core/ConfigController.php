<?php
namespace Core;

// responsavel por indicar as rotas para o  controller

class ConfigController
{
  private string $url;
  private array $urlConjunto;
  private string $urlController;
  private string $urlMetodo;

  public function __construct()
  {
    // pegando a rota
    if (!empty(filter_input(INPUT_GET, 'url', FILTER_DEFAULT))) {

      $this->url = filter_input(INPUT_GET, 'url', FILTER_DEFAULT);

      $this->urlConjunto = explode("/", $this->url);
      if ((isset($this->urlConjunto[0])) and (isset($this->urlConjunto[1]))) {
        $this->urlController = $this->urlConjunto[0]; //atribui ao controller
        $this->urlMetodo = $this->urlConjunto[1]; //atribui ao metodo
      } else {
        // passou so o controller
        $this->urlController = "error";
        $this->urlMetodo = "index";
      }
    } else {
      $this->urlController = "Home";
      $this->urlMetodo = "index";
    }

  }
  public function carregar()
  {
    // carregar a requisição feita pelo user 
    $classe = "\\App\\Controllers\\" . $this->urlController;
    $metodo = $this->urlMetodo;
    $classeCarregar = new $classe;
    $classeCarregar->$metodo();
  }
}