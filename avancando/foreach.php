<?php

/*
$conta1 = [
    'titular' => 'Vinicius',
    'saldo' => 10000
];

$conta2 = [
    'titular' => 'Maria',
    'saldo' => 10000
];

$conta3 = [
    'titular' => 'Alberto',
    'saldo' => 300
];

$contasCorrentes = [$conta1, $conta2, $conta3];

foreach ($contasCorrentes as $conta) {
    echo $conta['titular'] . PHP_EOL;
}

*/
// array associativo
$contasCorrentes = [
    12345678910 => [
        'titular' => 'Vinicius',
        'saldo' => 10000
    ], 
    12345678911 => [
        'titular' => 'Maria',
        'saldo' => 10000
    ], 
    12344678910 => [
        'titular' => 'Alberto',
        'saldo' => 300
    ]
];

foreach ($contasCorrentes as $cpf => $conta) {
    echo $cpf . PHP_EOL;
}