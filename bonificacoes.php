<?php

require_once 'autoload.php';

use Alura\Banco\Modelo\{CPF, Funcionario};
use Alura\Banco\Service\ControladorDeBonificacoes;

$funcionario1 = new Funcionario(
    "Joao Henrique",
    new CPF("451.292.370-56"),
    "desenvolvedor",
    2400
);

$funcionario2 = new Funcionario(
    "Maria Eduarda",
    new CPF("345.653.678-40"),
    "administrativo",
    3400
);

$controlador = new ControladorDeBonificacoes();
$controlador->adicionaBonificacao($funcionario1);
$controlador->adicionaBonificacao($funcionario2);

echo $controlador->recuoperaTotal();
