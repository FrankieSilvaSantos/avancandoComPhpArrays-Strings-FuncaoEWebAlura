<?php
$contasCorrentes = [

    12315487 => [
    'titular' => 'Frankie Yoogan',
    'saldo' => 1000
    ],





    12313132 => [
    'titular' => 'Franzie Santos',
    'saldo' => 300
    ],




    12315646 => [
    'titular' => 'Leke',
    'saldo' => 2000
    ],
];

$contasCorrentes[1231313] = [
    'titular' => 'Claudia',
    'saldo' => 9000
];



foreach ($contasCorrentes as $cpf => $conta) {
    echo "cpf: ",$cpf," ";
    echo $conta['titular']," ";
    echo $conta['saldo'];
}

?>