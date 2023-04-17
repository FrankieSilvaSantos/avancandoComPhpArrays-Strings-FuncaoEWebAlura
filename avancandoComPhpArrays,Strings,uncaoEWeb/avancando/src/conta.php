<?php

/*function criarConta(string $cpf,string $nomeTitular,float $saldo): array {
    return [
        $cpf => [
            'titular' => $nomeTitular,
            'saldo' => $saldo
        ]
        ];
};*/

class Conta {
    public string $cpfTitular;
    public string $nomeTitular;
    public float $saldo = 0;

   public function sacarValor(float $valorASacar) {
    
        if($valorASacar > $this->saldo) {
            echo "saldo indisponivel";
        } else {
           $this->saldo -=$valorASacar;
        }
    }

    public function depositarValor(float $valorADepositar) {
        if($valorADepositar < 0) {
            echo "Deposito indisponivel";
        } else {
            $this->saldo +=$valorADepositar;
        }
    }
}



$primeiraConta = new Conta();

$primeiraConta->nomeTitular = 'Frankie Yoogan';
$primeiraConta->cpfTitular = '124.124.124.124';
$primeiraConta->saldo = 1000;

$segundaConta = new Conta();

$segundaConta->cpfTitular = '924.924.924.924';
$segundaConta->nomeTitular = 'Lelouch';
$segundaConta->saldo = 2000;

$terceiraConta = new Conta();

$terceiraConta->cpfTitular = '450.450.450.450';
$terceiraConta->nomeTitular = 'Joshua';
$terceiraConta->saldo = 3500;

var_dump($primeiraConta);

var_dump($segundaConta);

var_dump($terceiraConta);

echo "saldo da conta Lelouch: $segundaConta->saldo \n";



$primeiraConta->sacarValor(500);
$primeiraConta->sacarValor(500);
$primeiraConta->depositarValor(50);

echo "Saldo da conta Frankie: $primeiraConta->saldo";


?>