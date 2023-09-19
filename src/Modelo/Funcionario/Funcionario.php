<?php

namespace Alura\Banco\Modelo\Funcionario;
use Alura\Banco\Modelo\CPF;
use Alura\Banco\Modelo\Pessoa;

abstract class Funcionario extends Pessoa
{
    private $salario;

    public function __construct(string $nome, CPF $cpf, float $salario)
    {
        parent::__construct($nome, $cpf);
        $this->salario = $salario;
    }

    public function recuperaSalario():float 
    {
        return $this->salario;
    }

    public function alteraSalario(float $aumentoSalario) 
    {
        if ($aumentoSalario > 0)
           return $this->salario += $aumentoSalario;
        echo "Aumento de sálario insuficiente";
    }

    abstract public function calculaBonificacao(): float;

    public function alteraNome(string $nome): void
    {
        $this->validaNome($nome);
        $this->nome = $nome;
    }
}
