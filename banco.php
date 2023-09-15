<?php

require "Conta.php";

$contaHenrique = new Conta();
$contaFulano = new Conta();

$contaHenrique->setNome("Henrique");
$contaFulano->setNome("Fulano");

$contaHenrique->depositar(567);

$contaHenrique->transferir(200, $contaFulano);

echo "saldo conta joao {$contaHenrique->getSaldo()}";