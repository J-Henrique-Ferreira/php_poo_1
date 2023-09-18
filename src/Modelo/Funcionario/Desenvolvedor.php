<?php

namespace Alura\Banco\Modelo\Funcionario;

use Alura\Banco\Modelo\Autenticavel;
use Alura\Banco\Modelo\Funcionario\Funcionario;

class Desenvolvedor extends Funcionario implements Autenticavel
{
    public function calculaBonificacao(): float 
    {
        return $this->recuperaSalario() * 0.5; 
    }

    public function sobeNivel(): void
    {
        $this->alteraSalario($this->recuperaSalario() * 0.75);
    }

    public function podeAutenticar(string $senha): bool {
        return $senha === "desenvolvedor";
    }
}