<?php

namespace Core;



class ConfigHome
{
    private string $nome;
   
    public function __construct($nome)
    {
        $this->nome = $nome;
  

    }
    public function renderizar()
    {
        if (file_exists('app/' . $this->nome . '.php')) {
            // verifica se o arquivo existe
            include 'app/' . $this->nome . '.php';

        } else {
            echo "error ao carregar";
        }

    }


}