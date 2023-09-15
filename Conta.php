<?php
class Conta {
    private string $nome;
    private string $cpf;
    private float $saldo = 0;

    public function __construct(string $nome, string $cpf) {
        $this->nome = $nome;
        $this->$cpf = $cpf;
    }


    public function getNome (): string {
        return $this->nome;
    }

    public function getCpf (): string {
        return $this->cpf;
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
