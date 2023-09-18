<?php

namespace Alura\Banco\Modelo\Funcionario;
use Alura\Banco\Modelo\Funcionario\Funcionario;

class Desenvolvedor extends Funcionario
{
    public function calculaBonificacao(): float 
    {
        return $this->recuperaSalario() * 0.5; 
    }

    public function sobeNivel(): void
    {
        $this->alteraSalario($this->recuperaSalario() * 0.75);
    }
}