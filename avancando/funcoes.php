<?php

function sacar(array $conta, float $valorASacar): array {
    if ($valorASacar > $conta['saldo']) {
        exibeMensagem("Voce nao pode sacar");
    } else {
        $conta['saldo'] -= $valorASacar;
    }
    return $conta; // precisa colocar o return caso contrario ele nao ira alterar o resultado
}

function exibeMensagem($mensagem) {
    echo $mensagem . PHP_EOL;
}

function despositar (array $conta, float $valorADepositar) {
    if($valorADepositar > 0) {
        $conta['saldo'] += $valorADepositar;
    } else {
        exibeMensagem("Depositos precima ser positivos");
    }
    return $conta;
}

function titularComLetrasMaiusculas(array &$conta) // o & antes da variavel diz que vc vai passar exatamente essa variavel, e nao uma copia para a funcao
{
    $conta['titular'] = mb_strtoupper($conta['titular']);
}