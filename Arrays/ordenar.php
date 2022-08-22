<?php

/*

$notas = [
    10,
    8,
    9,
    7
];

sort($notas); // ordena o array com referencia & e nao uma copia dele

*/

$notas = [
    [
        'aluno' => 'Maria',
        'nota' => 10,
    ],
    [
        'aluno' => 'Vinicius',
        'nota' => 6
    ],
    [
        'aluno' => 'Ana',
        'nota' => 9
    ],
];

/*

function ordenaNotas(array $nota1, array $nota2): int
{
    if($nota1['nota'] > $nota2['nota']) {
        return -1;
    }

    if($nota2['nota'] > $nota1['nota']) {
        return 1;
    }

    return 0;
}

usort($notas, 'ordenaNotas');
var_dump($notas);

*/

function ordenaNotas(array $nota1, array $nota2): int
{
    return $nota1['nota'] <=> $nota2['nota'];
}

// faz a mesma coisa que a funcao acima, porem de forma crescente, se quiser de forma decrescente e so inverter a ordem das notas para $nota2 <=> $nota1

usort($notas, 'ordenaNotas');
var_dump($notas);


