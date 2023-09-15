<?php
class Conta {
    private string $nome;
    private float $saldo = 0;

    public function setNome (string $valorNome): void {
        if ($valorNome)
            echo "Nome deefinido para $valorNome" . PHP_EOL;
            $this->nome = $valorNome;
    }

    public function getNome (): string {
        return $this->nome;
    }

    public function getSaldo (): float {
        return $this->saldo;
    }

    public function sacar (float $valorSaque): void {
        if($valorSaque <  $this->saldo) {
            $this->saldo -= $valorSaque;
            echo "Sacou o valor de $valorSaque" . PHP_EOL;
            return;
        }
    }

    public function depositar (float $valorDeposito): void {
        if ($valorDeposito > 0) $this->saldo += $valorDeposito;
    }

    public function transferir (float $valorTransferencia, Conta $conta) : void {
        if(
          ($valorTransferencia <= $this->saldo)
          &&
          ($this->saldo - $valorTransferencia  >= 0)
        ) {
            echo "Valor transferido $valorTransferencia" . PHP_EOL;
            $this->sacar($valorTransferencia);
            $conta->depositar($valorTransferencia);
        } 
    }
}
