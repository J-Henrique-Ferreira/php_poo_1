<?php

require_once "autoload.php";

use Alura\Banco\Modelo\Conta\Titular;
use Alura\Banco\Modelo\CPF;
use Alura\Banco\Modelo\Endereco;
use Alura\Banco\Modelo\Funcionario\Desenvolvedor;
use Alura\Banco\Modelo\Funcionario\Diretor;
use Alura\Banco\Service\Autenticador;

$endereco = new Endereco("", "", "","");

$diretor = new Diretor("Pedro", new CPF("710.407.510-08"), "3500");
$desenvolvedor = new Desenvolvedor("Jake Peralta", new CPF("710.407.510-08"), "4500");
$titular = new Titular(new CPF("710.407.510-08"), "TitularConta", $endereco);

$autenticador = new Autenticador();

$autenticador->tentaLogin($diretor, "diretor");
$autenticador->tentaLogin($desenvolvedor, "desenvolvedor");
$autenticador->tentaLogin($titular, "titular");