<?php

namespace App\Models;


class AdmsLogin
{
    private bool $resultado;

    public function getResultado(): bool
    {
        return $this->resultado;
    }
    public function login(array $dados = null)
    {
        $this->resultado = true;
    }
}
