<?php

require 'funcoes.php';
// require_once 'funcoes.php'; ele verifica se o arquivo ja foi importado, entao n gera o erro de "duplicado"

$contasCorrentes = [
    '123.456.789.10' => [
        'titular' => 'Maria',
        'saldo' => 10000
    ],
    '123.456.689-11' => [
        'titular' => 'Alberto',
        'saldo' => 300
    ],
    '123.256.789-12' => [
        'titular' => 'Vinicius',
        'saldo' => 100
    ]
    ];


$contasCorrentes['123.456.789.10'] = sacar(
    $contasCorrentes['123.456.789.10'], 
    500
);

$contasCorrentes['123.456.689-11'] = sacar(
    $contasCorrentes['123.456.689-11'], 
    200
);

$contasCorrentes['123.256.789-12'] = despositar(
    $contasCorrentes['123.256.789-12'],
    900
);

titularComLetrasMaiusculas($contasCorrentes['123.256.789-12']);

/*

foreach ($contasCorrentes as $cpf => $conta) {
    //exibeMensagem($cpf . " " . $conta['titular'] . ' ' . $conta['saldo']);
    exibeMensagem(
        "$cpf {$conta['titular']} {$conta['saldo']}"
    );
}

*/

// unset($contasCorrentes['123.456.689-11']); remove da lista esse item, nesse indice
// php -S localhost:8080 para subir um webserver do PHP

foreach ($contasCorrentes as $cpf => $conta) {
    // list('titular' => $titular, 'saldo' => $saldo) = $conta; igual a linha de baixo
    ['titular' => $titular, 'saldo' => $saldo] = $conta;
    exibeMensagem(
        "$cpf $titular $saldo"
    );
}

// Para colocar PHP no meio dos codigos HTML pode se usar  <?= ? > em vez de usar o a tag normal