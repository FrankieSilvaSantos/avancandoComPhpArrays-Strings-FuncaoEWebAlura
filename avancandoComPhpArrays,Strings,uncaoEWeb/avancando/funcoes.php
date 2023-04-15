<?php

echo "Arquivo de funcoes aqui \n";
function exibirMensagem(string $mensagem) {
    echo $mensagem. "\n";
}

function sacar(array $conta,float $valorSacar) {
    if($valorSacar> $conta['saldo']) {
        exibirMensagem(mensagem:"Voce nao pode sacar este valor :c \n");
    } else {
        $conta['saldo'] -=$valorSacar;
    }
    return $conta;
}

function depositar(array $conta,float $valorDepositar) {
    if($valorDepositar< $conta['saldo']) {
        echo "nao foi possivel depositar o valor";
    } else {
        $conta['saldo'] +=$valorDepositar;
    }
    return $conta;
}

function titularMaiuscula(array &$conta) { // recebendo a referencia e nao a opia
    $conta['titular'] = strtoupper($conta['titular']);

}
?>