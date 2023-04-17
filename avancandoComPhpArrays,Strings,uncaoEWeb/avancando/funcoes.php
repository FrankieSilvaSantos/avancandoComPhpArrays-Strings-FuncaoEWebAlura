<?php
require_once 'banco.php';
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
    if($conta['saldo'] + $valorDepositar < 0) {
        echo"nao foi possivel depositar";
    } else if($valorDepositar< $conta['saldo'] || $valorDepositar> $conta['saldo']) {
        $conta['saldo'] +=$valorDepositar;
    }
    return $conta;
}

function titularMaiuscula(array &$conta) { // recebendo a referencia e nao a opia
    $conta['titular'] = strtoupper($conta['titular']);

}

/*function exibirConta(array $conta) {
    $html = "<li> Titular: {$conta['titular']} Saldo: {$conta['saldo']} </li>";
    echo "$html";
}*/
?>