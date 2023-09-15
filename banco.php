<?php

require "Conta.php";

$contaHenrique = new Conta(nome: "Henrique", cpf: "123.456.789-10");
$contaFulano = new Conta(nome: "Fulano", cpf: "123.456.789-11");

$contaHenrique->depositar(567);

$contaHenrique->transferir(200, $contaFulano);

echo "saldo conta joao {$contaHenrique->getSaldo()}";