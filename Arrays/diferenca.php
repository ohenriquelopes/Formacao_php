<?php


$notasBimestre1 = [
    'Vinicius' => 6,
    'Joao' => 8,
    'Ana' => 10,
    'Roberto' => 7,
    'Maria' => 9,
];

$notasBimestre2 = [
    'Joao' => 8,
    'Ana' => 10,
    'Roberto' => 7,
    'Maria' => 9,
];


var_dump(array_diff($notasBimestre1, $notasBimestre2)); // vai mostrar qual nao esta presente nos 2, ele so leva em consideracao os valores, nao os indices

var_dump(array_diff_key($notasBimestre1, $notasBimestre2)); // faz baseado na chave(indice)

var_dump(array_diff_assoc($notasBimestre1, $notasBimestre2)); // faz comparacao de chave e de valor



$alunosFaltantes = array_diff_key($notasBimestre1, $notasBimestre2);
var_dump(array_keys($alunosFaltantes)); // mostra somente as chaves
var_dump(array_values($alunosFaltantes)); // mostra as notas dos alunos faltantes (valores)



$nomesAlunos = array_keys($alunosFaltantes);
$notasAlunos = array_values($alunosFaltantes);

var_dump(array_combine($notasAlunos, $nomesAlunos1)); // primeiro e a chave e o segundo o valor
var_dump(array_flip($alunosFaltantes)); // inverte o valor e a chave (troca de lugar)

