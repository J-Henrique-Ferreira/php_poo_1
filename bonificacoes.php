<?php

require_once 'autoload.php';

use Alura\Banco\Modelo\{CPF};

use Alura\Banco\Modelo\Funcionario\{Desenvolvedor, Gerente};
use Alura\Banco\Service\ControladorDeBonificacoes;

$funcionario1 = new Desenvolvedor(
    "Joao Henrique",
    new CPF("451.292.370-56"),
    2400
);

$funcionario2 = new Gerente(
    "Maria Eduarda",
    new CPF("345.653.678-40"),
    3400
);

$controlador = new ControladorDeBonificacoes();
$controlador->adicionaBonificacao($funcionario1);
$controlador->adicionaBonificacao($funcionario2);

echo $controlador->recuoperaTotal();
