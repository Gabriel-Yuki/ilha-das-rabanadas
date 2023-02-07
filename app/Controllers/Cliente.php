<?php

namespace App\Controllers;


class Cliente{
    private object $clienteModel;
    private array $dados;

    public function __construct()
    {
        $this->clienteModel = new \App\Models\ClienteModel(); //instanciando a class model

    }
    public function index (){}
    
}