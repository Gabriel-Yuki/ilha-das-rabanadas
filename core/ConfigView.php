<?php

namespace Core;



class ConfigView
{
    private string $name;
    private  $datas;
    private $teste;
    public function __construct($name, array $datas = null)
    {
        $this->name = $name;    
        $this->datas = $datas;
    }
    public function renderizar()
    {
        if (file_exists('app/Views/' . $this->name . '.php')) {
            // verifica se o arquivo existe
            include 'app/Views/' . $this->name . '.php';
        } else {
            echo "error ao carregar: ";
            echo 'app/Views/' . $this->name . '.php';
        }
    }
}
