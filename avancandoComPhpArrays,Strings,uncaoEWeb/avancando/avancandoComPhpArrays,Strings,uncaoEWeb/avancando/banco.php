<?php
require_once 'funcoes.php';
$contasCorrentes = [

    12315487 => [
    'titular' => 'Frankie Yoogan',
    'saldo' => 1000
    ],





    12313132 => [
    'titular' => 'Franzie Santos',
    'saldo' => 3000
    ],




    12315646 => [
    'titular' => 'Leke',
    'saldo' => 2000
    ],
];

titularMaiuscula(conta: $contasCorrentes['12315487']);
titularMaiuscula(conta: $contasCorrentes['12313132']);
titularMaiuscula(conta: $contasCorrentes['12315646']);


$contasCorrentes[12313132] = sacar($contasCorrentes[12313132],valorSacar:500);

//sacar($contasCorrentes[12313132],valorSacar:500);

$contasCorrentes[12315487] = depositar($contasCorrentes[12315487],valorDepositar: 1000);

unset($contasCorrentes['12315646']); //remover valor do array

$contasCorrentes[9090900] = ['titular' => 'Maria Antonieta','saldo' => 9000]; // adicionando valor no array

$contasCorrentes[9090900] = depositar($contasCorrentes[9090900],valorDepositar:500);


foreach ($contasCorrentes as $cpf => $conta) {
    list('titular' => $titular,'saldo' => $saldo) = $conta; // associando o array a uma variavel usando list
    echo "cpf: $cpf $titular $saldo \n";
}

function saudacao() {
    echo "Olá consagrade";
}

saudacao();


?>